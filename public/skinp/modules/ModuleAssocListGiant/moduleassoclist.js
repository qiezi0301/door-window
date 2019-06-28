function initAssocListGiant(ModuleID, ContentModuleID, ClsID, Cls_Layout, ActClsID) {
	$(document).ready(function () {
		window['initFunc' + ModuleID] = function () {
			$('#module_' + ModuleID).css({
				height: 'auto'
			});
		}
		$(window).off('resize.grid' + ModuleID).on('resize.grid' + ModuleID, function () {
			window['initFunc' + ModuleID]();
		});
		window['initFunc' + ModuleID]();

		listenerClsClick(ContentModuleID, ClsID, Cls_Layout, ActClsID);
	});
}

// 子项的分类模块a标签点击事件监听
function listenerClsClick(ContentModuleID, ClsID, layout, ActClsID) {
	// 当模块在分类页中，即在内容模块显示为分类对应内容时不再移除选中当前分类
	if (!ActClsID) {
		// 移除初始化时选中元素状态
		if ($.inArray(layout, ['101', '102', '103', '105']) > -1) {
			$("#module_" + ClsID + " .assoc-cls-listener-a li").removeClass("active");
			$("#module_" + ClsID + " .assoc-cls-listener-a li").removeAttr("iscurrent");
		} else {
			$("#module_" + ClsID + " .assoc-cls-listener-a p").removeClass("active");
			$("#module_" + ClsID + " .assoc-cls-listener-a p").removeAttr("iscurrent");
		}
	}

	// 监听点击
	$('body').off('click.event' + ClsID).on('click.event' + ClsID, "#module_" + ClsID + " .assoc-cls-listener-a a, #clone_module_" + ClsID + ".assoc-cls-listener-a a, #clone_mob_module_" + ClsID + " .assoc-cls-listener-a a, .inlayout-" + layout + "dialog" + ClsID + ".assoc-cls-listener-a a", function () {
		// 阻塞浏览器默认行为，以免出现不正常回到页面顶部
		window.event.returnValue = false;
		// 移除原选中元素状态,给当前选中元素添加状态
		if ($.inArray(layout, ['101', '102', '103', '105']) > -1) {
			$("#module_" + ClsID + " .assoc-cls-listener-a li").removeClass("active");
			$("#module_" + ClsID + " .assoc-cls-listener-a li").removeAttr("iscurrent");

			$(this).parent().attr("iscurrent", "1");
			$(this).parent().addClass("active");
		} else {
			if (window.innerWidth > 768) {
				$("#module_" + ClsID + " .assoc-cls-listener-a p").removeClass("active");
				$("#module_" + ClsID + " .assoc-cls-listener-a p").removeAttr("iscurrent");

				$(this).parent().attr("iscurrent", "1");
				$(this).parent().addClass("active");
			} else {
				if ($.inArray(layout, ['104', '106', '107', '108', '109', '110']) > -1) {
					if (!$(this).attr("href")) {
						return;
					}
					// 关闭侧边栏
					if ($.inArray(layout, ['104', '108', '109', '110']) > -1) {
						$('.layout-' + layout + 'dialog' + ClsID).addClass('dialog-hide');
						$('.mask-layermask-layer').fadeOut('normal', function () {
							$('.layout-' + layout + 'dialog' + ClsID).hide();
						});
					} else {
						var cloneIdMob = "#clone_mob_module_" + ClsID;
						var moduleClass = $('#module_' + ClsID).children().attr('class') || '';
						var cloneMob = $("<div id='" + cloneIdMob.replace("#", "") + "' class='" + moduleClass + "'><div class='leftLucency'></div></div>");
						var leftLucency = $(cloneMob).find('.leftLucency');
						var mobileBox = document.querySelector("#clone_mob_module_" + ClsID + " .main-class-container-mobile");
						$(mobileBox).fadeOut(300);
						mobileBox.style.transform = 'translateX(100%)';
						$('#pro-' + layout + '-shade' + ClsID).fadeOut();
						leftLucency.hide();
					}
				}
			}
		}

		var classActiveID = $(this).attr("dataid");
			var contentUrl = "/index.php?c=Front/LoadModulePageData&ClassID=" + classActiveID + "&responseModuleId=" + ContentModuleID + "&PageNo=1&inAssoc=1";
			var loadingText = getLang('loading') + '...';

			$("#module_" + ContentModuleID).find('.BodyCenter').css({
				'opacity': '0',
				'visibility': 'hidden'
			});
			var pageLoadingHtml = '<div name="pageloading" class="PageLoading">';
			pageLoadingHtml += '<div class="content">';
			pageLoadingHtml += '<span class="fa fa-spinner fa-spin loading-icon"></span>';
			pageLoadingHtml += '<span class="loading-text">' + loadingText + '</span>';
			pageLoadingHtml += '</div>';
			pageLoadingHtml += '</div>';
			$("#module_" + ContentModuleID).children().append(pageLoadingHtml);

			$.ajax({
				url: contentUrl,
				async: true,
				dataType: "text/html",
				complete: function (request, status, error) {
					$("#module_" + ContentModuleID).replaceWith(request.responseText);
					BindPagerAction();
					if (typeof CanDesign != 'undefined' && CanDesign != "True") {
						var bodyClientHeight = document.documentElement.clientHeight // 因为有DOCTYPE
						if (bodyClientHeight == 0) bodyClientHeight = window.innerHeight;
						var bodySrollTop = $('body').scrollTop();
						if (bodySrollTop == 0) bodySrollTop = $(window).scrollTop();
						var relModule = $("#module_" + ContentModuleID).eq(0);
						var originModuleHeight = relModule.height();
						var ispagemore = $("#module_" + ContentModuleID).children('.page-more').length;
						if (relModule.length > 0) {
							if (ispagemore < 1) {
								if (getCookie("SiteType") == "0") {
									if (originModuleHeight > bodyClientHeight || getElementTop(relModule[0]) < bodySrollTop) {
										$('body,html').animate({
											scrollTop: getElementTop(relModule[0])
										}, 1000);
									}
								} else {
                                    if (window.innerWidth < 768) {
                                        console.log(window.innerWidth)
                                        window.location.href = "#module_" + ClsID;
                                    }
								}
							}
						}
					}
					//加载完成后 重新调用一下该模块的init方法
					if (window["initFunc" + ContentModuleID]) {
						window["initFunc" + ContentModuleID]();
					}
				}
			});
	})
}