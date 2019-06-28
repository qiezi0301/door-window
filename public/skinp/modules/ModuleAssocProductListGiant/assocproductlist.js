function initAssocProductListGiant(moduleId, layout, options,GoDetailType=0,layoutcolor='red') {
    if ($.inArray(parseInt(layout), [104, 105, 106, 107, 108, 109 ,110,111, 112, 113, 114, 115,116,117]) > -1) {
		addScripts(['/skinp/common/mobile/js/jquery.sideSwitch.js','/skinp/common/mobile/js/screeRow.js','/skinp/common/mobile/collection/js/jq.toch.js'],function(){
			//Ipad和手机版初始化过滤
			$(window).on('resize.filterControll', function () {
				//初始化使用为固定定位
				if (window.innerWidth < 992) {
					$('#module_' + moduleId + ' .silder-filter').sideSwitch({
						myPosition: 'fixed',
						extra: '-20',
						offsetTop: '35px',
						contentLeft: '20px',
						initTop: '0',
						sideWidth: '0',
						contentWidth: (window.innerWidth >= 768 && window.innerWidth < 1199) ? window.innerWidth * .43 : window.innerWidth * .8,
						contentHeight: $(window).height(),
						btn: $('#module_' + moduleId + ' .btn-filter'),
						callback: function (_this) {
							ScrollFix(_this.find('.ss_content').get(0));
							setlineCent($('.FilterMobile'),_this);
							$('#module_' + moduleId + ' .shier').show().off('click').on('click',function(){
								$('#module_' + moduleId + ' .btn-filter').click();
								$('body').removeClass('bodyfixd');
								$('body').removeClass('bodyabstre');
								$(this).hide()
							});
						}
					});
				}else{
					$('#module_' + moduleId + ' .silder-filter').hide()
				}

				if (window.innerWidth >= 992) {
					$('#module_' + moduleId + ' .pred-filter').screeRow({
						btnClasses: {btn: 'btn', btn_event: 'btn-event', 'btn-more': 'btn-more'},
						roomClasses: {text_center: 'text-center', more: 'more', giantroom: 'giantroom'},
						callback: function () {
						}
					});
				}

				$('#module_' + moduleId + ' .shier').hide();
			})
			var setlineCent = function(dom,room){
				if(room.data('isfinish'))return
				dom.each(function(){
					var _this = $(this);
					_this.children().each(function(){
						if(($(this).find('span').height())<=30)$(this).find('span').addClass('transform-center');
						else $(this).find('span').css('height','33px');
					})
				})
				room.data('isfinish',true);
			}
			var ScrollFix = function(elem) {
				var u = navigator.userAgent;
				var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
				var startY, startTopScroll;
				elem.addEventListener('touchstart', function(event){
					if(isiOS){if(!$('body').hasClass('bodyabstre')) $('body').addClass('bodyabstre');}
					else{if(!$('body').hasClass('bodyfixd')) $('body').addClass('bodyfixd');}
					startY = event.touches[0].pageY;
					startTopScroll = elem.scrollTop;
					//当滚动条在最顶部的时候
					if(startTopScroll <= 0)
						elem.scrollTop = 1;
					//当滚动条在最底部的时候
					if(startTopScroll + elem.offsetHeight >= elem.scrollHeight)
						elem.scrollTop = elem.scrollHeight - elem.offsetHeight - 1;
				}, false);
			};
			var collapse = function (dom, kind) {
				var flag = $(dom).attr('attr-flag');
				if (kind == 'pc') {
					if (flag == 'true') {
						$(dom).parents('.setting-pred-warp').eq(0).find('.pred-items').height('auto');
						$(dom).find('.filter-fold').show();
						$(dom).find('.filter-more').hide();
						$(dom).attr('attr-flag', false)
					}
					else if (flag == 'false') {
						$(dom).parents('.setting-pred-warp').eq(0).find('.pred-items').height(35);
						$(dom).find('.filter-more').show();
						$(dom).find('.filter-fold').hide();
						$(dom).attr('attr-flag', true);
					};

				} else if (kind == 'mobile') {
					if (flag == 'true') {
						$(dom).parents('.filter-items').eq(0).find('ul').height('auto');
						$(dom).find('.filter-fold').show();
						$(dom).find('.filter-all').hide();
						$(dom).attr('attr-flag', false);
					}
					else if (flag == 'false') {
						$(dom).parents('.filter-items').eq(0).find('ul').height('40px');
						$(dom).find('.filter-all').show();
						$(dom).find('.filter-fold').hide();
						$(dom).attr('attr-flag', true);
					}
				}

			}
			$('#module_' + moduleId + ' .setting-cut' + ',#module_' + moduleId + ' .mobile-cut').click(function () {
				if ($(this).hasClass('setting-cut')) collapse(this, 'pc');
				else if ($(this).hasClass('mobile-cut')) collapse(this, 'mobile');
			})
			var touchOn = new jQtochfn({
				'objID':  '#module_' + moduleId + ' .silder-filter',//需要绑定tochs事件的元素
				tochStart: function (e, x, y, oSelf, positions) {
				},//tochStart的回调函数
				tochMove: function (e, direction, oSelf, positions) {

				},///tochMove的回调函数
				tochEnd: function (e, direction, oSelf, positions) {
					if (direction.x > $('body').width()*.3) {
						$('body').removeClass('bodyfixd');
						$('body').removeClass('bodyabstre');
						$('#module_' + moduleId + ' .btn-filter').click();
						$('#module_' + moduleId + ' .shier').hide();
					}

				},//tochStart的回调函数
				'objthis': {}//支持传入一个对象，方便在回调中调用传入对象的方法(创建容器对象)
			});
			$('#module_' + moduleId + ' .silder-filter').sideSwitch({
				myPosition: 'fixed',
				extra: '-20',
				offsetTop: '35px',
				contentLeft: '20px',
				initTop: '0',
				sideWidth: '0',
				contentWidth: (window.innerWidth >= 768 && window.innerWidth < 1199) ? window.innerWidth * .43 : window.innerWidth * .8,
				contentHeight: $(window).height(),
				btn: $('#module_' + moduleId + ' .btn-filter'),
				callback: function (_this) {
					ScrollFix(_this.find('.ss_content').get(0));
					setlineCent($('.FilterMobile'),_this);
					$('#module_' + moduleId + ' .shier').show().off('click').on('click',function(){
						$('#module_' + moduleId + ' .btn-filter').click();
						$('body').removeClass('bodyfixd');
						$('body').removeClass('bodyabstre');
						$(this).hide()
					});
			  }
			});
			$('#module_' + moduleId + ' .pred-filter').screeRow({
				btnClasses: {btn: 'btn', btn_event: 'btn-event', 'btn-more': 'btn-more'},
				roomClasses: {text_center: 'text-center', more: 'more', giantroom: 'giantroom'},
				callback: function () {
				}
			});
			$('#module_' + moduleId + ' .filter-items').each(function () {
				if ($(this).children('ul.FilterMobile').children().length <= 0) {
					$(this).hide()
				}
				;
				if ($(this).children('ul.FilterMobile').children().length <= 3) {
					$(this).find('.mobile-cut').eq(0).hide()
				}
				;
			});
			$('#module_' + moduleId + ' .filter-items ul li').click(function () {
				if ($(this).hasClass('items-active')) {
					$(this).parent().find('li').removeClass('items-active');
				} else {
					$(this).parent().find('li').siblings(".items-active").removeClass('items-active');
					$(this).addClass('items-active');
				}
			})
			$('#module_' + moduleId + ' .bean-reset').click(function () {
				$('.items-active').removeClass('items-active');
			})
			//PC产品筛选JS
			$('#module_' + moduleId + ' .FilterPc>li').off('touchend.orderCtrl click.orderCtrl').on('touchend.orderCtrl click.orderCtrl', function (e) {
				var filterProductPanel = $('#module_' + moduleId + ' .setting-tab-bar');
				filterProductList_Pc(filterProductPanel, this, moduleId, options.PageLink);
			});

			$('#module_' + moduleId + ' .setting-tab-bar .icon-cuowu').off('touchend.orderCtrl click.orderCtrl').on('touchend.orderCtrl click.orderCtrl', function (e) {
				var filterProductPanel = $('#module_' + moduleId + ' .setting-tab-bar');
				var filterItem = $(this).parent();
				filterProductList_Pc(filterProductPanel, filterItem, moduleId, options.PageLink);
			});

			//移动产品筛选JS
			$('#module_' + moduleId + ' .bean-finish').off('touchend.orderCtrl click.orderCtrl').on('touchend.orderCtrl click.orderCtrl', function (e) {
				var filterProductPanel = $('#module_' + moduleId + ' .FilterMobile');
				$('body').removeClass('bodyfixd');
				$('body').removeClass('bodyabstre');
				filterProductList_Mobile(filterProductPanel, moduleId, options.PageLink);

			});
		});
    }
    if ($.inArray(parseInt(layout), [119,120]) > -1) {
        initLayout120Demo(moduleId,GoDetailType,layoutcolor)
    }
    if (parseInt(layout) == 127) {
        initLayout127Demo(moduleId)
    }
	//处理有排序功能的
	$('#module_' + moduleId + ' .orderCtrlPanel>li').off('touchend.orderCtrl click.orderCtrl').on('touchend.orderCtrl click.orderCtrl', function (e) {
        if ($(this).hasClass('btn-filter')) {
            $('.selected').removeClass('selected');
            $(this).addClass('selected');
            return
        }
        sortProductList(this, moduleId, options['PageLink']);
    });
	window["initFunc" + moduleId] = function(){
		//统一处理只显示N行的
		if(options['MultiEllipsis']){
			addScript('/scripts/MultiEllipsis.js',function(){
				//标签页 或者 加载更多
				for(var i = 0; i < options['MultiEllipsis'].length;i++){
					new MultiEllipsis(options['MultiEllipsis'][i]);
				}
			});
		}

		//多列显示的风格处理统一行高
		if(options['LiHeight']){
			addScript('/scripts/LiHeight.js',function(){
				for(var i = 0; i < options['LiHeight'].length;i++){
					new LiHeight(options['LiHeight'][i]);
				}
			});
		}
	};
	window["initFunc" + moduleId]();
	$(window).off('resize.module'+moduleId).on('resize.module'+moduleId, function() {
		window["initFunc" + moduleId]();
	});

    showDetail(moduleId,GoDetailType,layoutcolor);
}

//弹窗
function showDetail(moduleId,GoDetailType,layoutcolor){
    if (GoDetailType == 1) {
        var pidReg = /^(prolist-pid-)(\d+)/;
        $("#module_"+moduleId).off('click.goDetail').on('click.goDetail', 'a[href^=\'prolist-pid-\']', function(e) {
            e.preventDefault();
            var pid = pidReg.exec($(this).attr('href'));
            if (pid !== null) {
                pid = pid[2];
                var html='<div class="productlistMask" style="width: 100%; left: 0px; top: 0px; height: 100%; position: fixed; user-select: none; z-index:999;background-color: #000;opacity: .6;filter: alpha(opacity=30);display: none" >';
                html += '</div>';
                $("#module_"+moduleId).append(html);
                $('.productlistMask').show();
                var detailajax=function(pid){
                    $.ajax(
                        {
                            url: "/index.php?c=Front/ProductDetail&a=getProductDetailModuleHtml&pid="+pid+"&layoutColor="+layoutcolor,
                            dataType:"html",
                            beforeSend: function () {

                            },
                            success: function (json) {
                                //  console.log(json);return false;
                                // if(!json.success){
                                //     $('.tplSelectMask').remove();
                                //     alert(json.msg);
                                //     return ;
                                // }
                                //$html="json";
                                $('.productlistMask').after(json);
                            }
                        });
                }
                detailajax(pid);
            }
        });
    }
}

//询盘
function  showEnquiryModal(product_id,product_name,product_imgurl,layout='',moduleId){
	if(layout==105){
			var evt = evt || window.event; //获取event对象
			if (evt.preventDefault) {
					evt.preventDefault(); //非IE浏览器
			} else {
					evt.returnValue = false; //在早期的IE版本中
			}
	}
    console.log(product_id, product_name, product_imgurl,layout,moduleId);
	$('#enquiryDailog'+moduleId).show(0,function() {
			$('#showcallback'+moduleId).data('enquiryCallBack') && $('#showcallback'+moduleId).data('enquiryCallBack')(product_name,product_id,product_imgurl,moduleId)
	});
}

/*
 * @params:
 * 	img 显示的图片
 * 	moduleId 模块Id
 */
function initLayout120Demo(moduleId,GoDetailType,layoutcolor) {

    $('#module_' + moduleId).off('click.link').on('click.link', '.itemLink', function (e) {
        e.preventDefault();
        var gref = $(this).attr('href-attr')

        if (GoDetailType == 1) {
            if(gref && gref.indexOf('http')>-1){
                window.open(gref);
            }else{
                showDetail(moduleId,GoDetailType,layoutcolor);
            }

        }else{
            if (gref) {
                window.open(gref);
            }
        }

    })
    $('#module_' + moduleId).off('click.Image' + moduleId).on('click.Image' + moduleId, ' .poppPostImage', function (e) {
        e.preventDefault();
        e.stopPropagation();
        var imageSrc = $(this).closest('.pro-img').find('img').attr('src')
        var $body_mask = $(
            '<div id="popup-module-slider" style="position: fixed;top: 0px; left: 0;width: 100%;height: 100%;background: rgba(0,0,0,0.9) no-repeat center;z-index: 9999;opacity: 0;transition: all .3s ease;">' +
            '<div class="closeBtn" style="opacity: 0;position: absolute;right: 40px;top: 0px;z-index: 2;cursor: pointer;width: 40px;height: 40px;border-radius: 50%;background-color: rgba(255,255,255,.2);color:#fff;line-height:40px;text-align:center;transition: all .6s ease;"><i class="iconfont icon-guanbi" style="font-size:12px;"></i></div>' +
            '<div style="height:450px;width:450px;background-image:url(' + imageSrc + ');background-size:cover;background-position:center;background-repeat: no-repeat;left: calc(50% - 225px);top: 0%;position: absolute;transition: all .5s ease;" id="popup-module-img" >' +
            '</div>' +
            '</div>')
        $('body').append($body_mask)
        var timer = setTimeout(function () {
            $body_mask.css('opacity', '1')
            $body_mask.find('#popup-module-img').css('top', '13%')
            $body_mask.find('.closeBtn').css({ 'opacity': '1', 'top': '40px' }).off('click.closeBtn').on('click.closeBtn', function () {
                $body_mask.find('#popup-module-img').css({ 'transition': 'all .3s ease', 'top': '-50vw' }).fadeIn()
                $(this).css('top', '-50px')
                var timere = setTimeout(function () {
                    $body_mask.remove()
                    clearTimeout(timere)
                }, 300)
                // $body_mask
            })
            clearTimeout(timer)
        }, 50)
    })
}

/*
 * @params:
 * 	img 显示的图片
 * 	moduleId 模块Id
 */
function initLayout127Demo(moduleId) {
    if (window.innerWidth > 1199) {
        $('#module_' + moduleId + ' .pro-item').hover(function () {

            $(this).find('.img1').stop(true).animate({ height: '0', top: '150px' });
            $(this).find('.img2').stop(true).animate({ height: '100%', top: '0px;' });
            $(this).find('.pro-name').css("border-top","0");
        }, function () {
            $(this).find('.img1').stop(true).animate({ top: '0px', height: '100%' });
            $(this).find('.pro-name').css("border-top-width","1px");
            $(this).find('.pro-name').css("border-top-style","solid");
            $(this).find('.pro-name').css("border-top-color","#eee");
        })
    } else {
        $('#module_' + moduleId + ' .pro-item').off();
    }
    var moduleWidth = null;
    $('#module_' + moduleId).off('resize.initLayout127').on('resize.initLayout127', function () {
        if (moduleWidth != window.innerWidth) {
            moduleWidth = window.innerWidth
            initLayout127Demo(moduleId)
        }
    })
}