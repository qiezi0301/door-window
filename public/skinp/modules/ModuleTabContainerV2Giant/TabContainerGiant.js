function TabconmonV2Giantfn(ModuleID, TabSwitch, layout, shuffling, time, speed, canDesign, isFullEdit, isSuspend) {
  // 注意：该文件不可以直接使用off()函数将'.Nav-Container>li'里面的悬停、点击事件给off掉，必须加别名去off('click.xxx')
  function openNewLink(module, TabSwitch) {
    $(module).off((window.CanDesign == 'False' ? 'click.toLink' : 'dbclick.toLink')).on((window.CanDesign == 'False' ? 'click.toLink' : 'dbclick.toLink'), ' .tab-link', function () {
      if ($(this).attr('on-link-href') != '' && $(this).attr('on-link-href') != 'undefined' && $(this).attr('on-link-href') != '' && window.CanDesign == 'False') {
        // 平板特殊处理
        if (window.innerWidth < 1200 && window.innerWidth > 767) {
            if($($(this).find('a').attr('href')).closest('.tab-content-parent').height() > 30 && $($(this).find('a').attr('href')).find('.ModuleItem').length > 0) {
              window.location.href = $(this).attr('on-link-href')
            } else if($($(this).find('a').attr('href')).find('.ModuleItem').length == 0) {
              window.location.href = $(this).attr('on-link-href')
            }
        } else {
          window.location.href = $(this).attr('on-link-href')
        }
      }
    })
  }

  $(function () {
    $('#tab_content_clone_module_' + ModuleID).remove()
    if ($.inArray(layout, ['110', '103', '106']) > -1 && isSuspend == '1' && shuffling == '1') {
      showSuspend(ModuleID, TabSwitch)
    }
    // 监听li外层父元素的宽度变化
    $('#module_' + ModuleID + ' .Nav-Container').resize(function () {
      var lengths = 0;
      var liLenth = $('#module_' + ModuleID + ' .Nav-Container li');
      liLenth.each(function (index, el) {
        lengths += $(el).outerWidth();
      })
      if (lengths > $('#module_' + ModuleID + ' .Nav-Container').width()) {
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollLeft').css("display", "inline-block");
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollRight').css("display", "inline-block");
      } else {
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollLeft').css("display", "none");
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollRight').css("display", "none");
      }
    })
    // 监听li元素的宽度变化显示隐藏按钮
    $('#module_' + ModuleID + ' .Nav-Container li').resize(function () {
      var totalLengths = 0;
      var liObjs = $('#module_' + ModuleID + ' .Nav-Container li');
      liObjs.each(function (index, el) {
        totalLengths += $(el).outerWidth();
      })
      if (layout == 105) {
        var margins = $('#module_' + ModuleID + ' ul.Nav-Container li').css('margin-right').substring(0, 2);
        totalLengths += Number(margins * 3);
      }
      if (totalLengths <= $('#module_' + ModuleID + ' .Nav-Container').width()) {
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollLeft').css("display", "none");
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollRight').css("display", "none");
      } else {
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollLeft').css("display", "inline-block");
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollRight').css("display", "inline-block");
      }
    })
    if ($.inArray(layout, ['110', '103', '106']) > -1) {
      openNewLink('#module_' + ModuleID, TabSwitch)
    }
  })

  //创建一个数组；用来储存标签的数量
  function initFuncCommon($obj) {
    var id = $obj.attr('data-href-id');
    $obj.find('*').each(function (idx, el) {
      if ($(this).is('.ModuleItem')) {
        var moduleid = ($(this).attr('id') || '').replace(/module_/i, '');
        var initFunc = window['initFunc' + moduleid];
        if (typeof initFunc == 'function') {
          initFunc()
        }
      }
    });
  }

  // 悬浮标签展示
  /**
   * @param 模块Id 是否悬停
   * // 先记录旧的位置, 删除旧的，然后再追加到body里面去，
   * // 初始化悬浮的方法
   */
  function showSuspend(ModuleID, TabSwitch) {
    if (TabSwitch == 'hover') {
      setTimeout(function () {
        $('#tab_content_clone_module_' + ModuleID).remove()
        var moduleSelector = $('#module_' + ModuleID)
        var tabContentParent = $('<div class="tab-content-parent" id="tab_content_clone_module_' + ModuleID + '"></div>')
        var tabContent = moduleSelector.find('.tab-content.tabContentGiant')
        var offLeft = moduleSelector.closest('.ModuleItem').offset().left
        tabContentParent.append(tabContent)
        var moduleHeight = moduleSelector.outerHeight(),
          modulePosTop = moduleSelector.offset().top,
          modulePosLeft = moduleSelector.offset().left;
        tabContentParent.css({
          top: (layout == '110' ? (modulePosTop + moduleHeight) - 11 : (modulePosTop + moduleHeight)) + 'px',
          left: '0px',
          display: 'none',
          'z-index': '9999'
        })
        tabContentParent.appendTo('body')
        var paddLeft = Number(tabContentParent.css('paddingLeft').replace('px', ''))
        tabContent.css({
          width: isFullEdit == '1' ? moduleSelector.closest('.ModuleGridContainer').width() : moduleSelector.find('.TabContainer-Container').outerWidth(),
          transform: isFullEdit == '1' ? '' : 'translate3d(' + (offLeft - paddLeft) + 'px,0px,0px)',
          margin: isFullEdit == '1' ? '0 auto' : '',
          display: 'block'
        })
        tabContent.find('.ModuleContainer.TabSubGridContainer').css('padding', '0')
        tabContent.find('.addnewhelper').css('marginBottom', '0')
        if (window.CanDesign == 'False') {
          tabContentParent.hover(function () {
            // 我就是什么事情都不干
          }, function () {
            tabContentParent.css({
              height: 0,
              display: 'none'
            })
            moduleSelector.find('.commonLabel.active').removeClass('active')
          })
        }
        if (window.CanDesign != 'False' && moduleSelector.is(':visible')) {
          showDropMenu(ModuleID,null)
          unclickHideMenu(ModuleID)
        }
        return true
      }, window.CanDesign != 'False' ? 2000 : 1000)
    }
  }

  // 点击悬浮
  function showDropMenu(ModuleID,subTarget) {
    $('#tab_content_clone_module_' + ModuleID).css('display', 'block')
    var times = 0
    // 解决相册模块因为使用的插件太多了，图片也多，所以初始化过程漫长，解决一下先
    if ($('#tab_content_clone_module_' + ModuleID).find('.tab-pane:visible .ModuleItem .ModuleSiteGalleryV2Giant.layout-110').length > 0 || $('#tab_content_clone_module_' + ModuleID).find('.tab-pane:visible .ModuleItem .ModuleSiteGalleryV2Giant.layout-104').length > 0) {
      times = 500
    }
    setTimeout(function () {
      // 是平板端，特殊处理
        // 点击第一次打开悬浮，点击第二次执行跳转
      if ($(this).parent().offset()) {
        $('#tab_content_clone_module_' + ModuleID).css({
          top:$(this).parent().offset().top + $(this).parent().outerHeight() - 1
        })
      }
      
      // 获取真实高度
      var tabContentHeight = $('#tab_content_clone_module_' + ModuleID).find('.tab-pane:visible').height()
      // 判断是否有内容
      if ((tabContentHeight > 5 && $('#tab_content_clone_module_' + ModuleID)
          .find('.tab-pane:visible .ModuleItem').length > 0) || window.CanDesign != 'False') {
        // 执行下滚
        $('#tab_content_clone_module_' + ModuleID).stop().animate({
          height: tabContentHeight + 'px'
        }, 'fast', 'swing', function () {
          // 我也是什么事情都不干
          $(this).css('height', 'auto')
          // 判断下方是否存在模块，存在模块去除addnewhelper
          if ($('#tab_content_clone_module_' + ModuleID).find('.tab-pane:visible .ModuleItem').length > 0) {
            $('#tab_content_clone_module_' + ModuleID).find('.tab-pane:visible  .addnewhelper').remove()
          }
        })
        // 没内容就隐藏了
      } else {
        if (window.CanDesign == 'False') {
          $('#tab_content_clone_module_' + ModuleID).css({
            height: 0,
            display: 'none'
          })
        }
      }
    }.bind(subTarget), times)
  }
  // resize触发
  // function resetWindowSize(ModuleID) {
  //   var windowsSize = window.innerWidth
  //   $(window).off('resize.resetWindowSize').on('resize.resetWindowSize',function() {
      
  //   })
  // }
  // 关闭悬浮框
  function unclickHideMenu(ModuleID) {
    $('body').off('click.hideTabMenu').on('click.hideTabMenu', function (e) {
      if ($('.tab-content-parent:visible').length > 0
        && !$(e.target).hasClass('tab-content-parent') && ($(e.target).closest('.tab-content-parent').length == 0 && !$(e.target).hasClass('tab-content-parent'))
        && !$(e.target).hasClass('tab-link') &&
        ($(e.target).closest('tab-link').length == 0 && !$(e.target).hasClass('tab-link')
          && $(e.target).closest('#moduleHelper').length == 0
        )
      ) {
        $('#module_' + ModuleID).find('.tab-link.active').removeClass('active')
        $('.tab-content-parent:visible').css({
          display: 'none',
          height: '0px'
        })
      }
    })
  }


  // end 新增的标签函数
  var recordIndex;

  function showShuffling(ID, layout) {
    //是否轮播
    var numIndex = 0 // 丛下标0开始轮播
    var numLength = ID.length - 1;

    // 按顺序执行
    function sequential(elm, numIndex, layout) {
      if (layout == '107' || layout == '108') {
        elm.find('.commonLabel').eq(numIndex).addClass("active");
        elm.find('.commonLabel').eq(numIndex - 1).removeClass("active");
        elm.find('.commonLabel').eq(numIndex - 1).tab('show');
        elm.find('.commonDiv').eq(numIndex).addClass("active");
        elm.find('.commonDiv').eq(numIndex).css('display', 'block');
        elm.find('.commonDiv').eq(numIndex - 1).css('display', 'none');
        elm.find('.commonDiv').eq(numIndex - 1).removeClass("active");
        elm.find('.commonDiv').eq(numIndex - 1).tab('show');
      } else {
        elm.find('.commonLabel').eq(numIndex).addClass("active");
        elm.find('.commonLabel').eq(numIndex - 1).removeClass("active");
        elm.find('.commonLabel:eq(' + (numIndex - 1) + ') a[data-toggle=tab]').tab('show');
      }
    }

    // 悬停时继续执行
    function hover(elm, numIndex, numLength, layout) {
      if (layout == '107' || layout == '108') {
        elm.find('.commonLabel').eq(0).addClass("active");
        elm.find('.commonLabel').eq(numIndex - 1).removeClass("active");
        elm.find('.commonLabel').eq(numLength).tab('show');
        elm.find('.commonDiv').eq(0).addClass("active");
        elm.find('.commonDiv').eq(numIndex - 1).removeClass("active");
        elm.find('.commonDiv').eq(0).css('display', 'block');
        elm.find('.commonDiv').eq(numIndex - 1).css('display', 'none');
        elm.find('.commonDiv').eq(numLength).tab('show');
      } else {
        elm.find('.commonLabel').eq(0).addClass("active");
        elm.find('.commonLabel').eq(numLength).removeClass("active");
        elm.find('.commonLabel:eq(' + numIndex + ') a[data-toggle=tab]').tab('show');
      }
    }

    function isShuffling(elm) {
      if (shuffling == 1) {
        return null;
      }
      var testInter = setInterval(function () {
        // 如果节点不存在则移除循环
        if (!elm || !$.contains(document.body, elm[0])) {
          clearInterval(testInter)
        }
        numIndex++;
        if (recordIndex) {
          if (layout == '107' || layout == '108') {
            numIndex = recordIndex
            if (numIndex <= numLength) {
              sequential(elm, numIndex, layout)
            } else {
              numIndex = 0
              hover(elm, numIndex, numLength, layout)
            }
          } else {
            numIndex = recordIndex + 1
            if (numIndex <= (numLength + 1)) {
              sequential(elm, numIndex, layout)
            } else {
              numIndex = 0
              hover(elm, numIndex, numLength, layout)
              numIndex = 1
            }
          }
          recordIndex = ''
        } else {
          if (numIndex - numLength > 1) {
            numIndex = 1
          }
          if (numIndex > numLength) {
            numIndex = 0
          }
          sequential(elm, numIndex, layout)
        }
      }, (Number(speed) + Number(time)) * 500);
      return testInter;
    }

    var testInterval = null;
    var windowWidth = window.innerWidth
    if (window.innerWidth > 767) {
      testInterval = isShuffling($('#module_' + ModuleID + ' .Nav-Container'))
    }
    window.onresize = function () {
      if (window.innerWidth == windowWidth) {
        return
      }
      windowWidth = window.innerWidth
      if (window.innerWidth < 768) {
        clearInterval(testInterval)
        testInterval = null;
        return;
      }
      if (!testInterval) {
        return;
      }
      testInterval = isShuffling($('#module_' + ModuleID + ' .Nav-Container'))
    }
    $('#module_' + ModuleID + ' .tabContainer').off('mouseenter mouseleave').on({
      mouseenter: function () {
        clearInterval(testInterval)
        testInterval = null;
      },
      mouseleave: function () {
        if (window.innerWidth >= 768) {
          clearInterval(testInterval)
          testInterval = isShuffling($('#module_' + ModuleID + ' .Nav-Container'))
        }
      }
    });
  }

  if (layout == "101" || layout == "102" || layout == "103" || layout == "104" || layout == "105" || layout == "106" || layout == "110") {
    if (window.CanDesign == 'False') {
      showShuffling($('#module_' + ModuleID + ' .Nav-Container li'), layout)
    }
    if (TabSwitch == 'hover') {
      $('#module_' + ModuleID + ' .tabContainer .nav li').off('mouseenter.hover').on('mouseenter.hover', function () {
        // 先赋值宽度
        if (window.CanDesign == 'False') {
          $('#tab_content_clone_module_' + ModuleID).width($('#module_' + ModuleID).find('.Nav-Container').width())
          // show出panel
          $(this).children('a').tab('show');
        }
        // 在浏览器标识为手机端时,不显示的tab项的优酷视频内容高度会被优酷直接设置为0px,必须重新赋值更新内容
        var elemIndex = $(this).index();
        recordIndex = elemIndex + 1
        var contentElem = $('#module_' + ModuleID).find($(this).find('a').attr('href'));
        if (!navigator.userAgent.match(/(iPhone|iPod|Android|ios|SymbianOS)/i) || contentElem.find('iframe').length == 0 || elemIndex == 0) {
          return
        }
        if (!contentElem.data('insert-html')) {
          contentElem.find('iframe').each(function (index, elem) {
            $(elem).attr('src', elem.src)
          })
          contentElem.data('insert-html', true)
        }
      }).off('mouseleave.hover').on('mouseleave.hover', function (e) {
        if (window.CanDesign == 'False') {
          $(this).removeClass('active')
          if (e.toElement && (e.toElement.classList.contains('tabContainerGiantGrid') || $(e.toElement).closest('.tab-content-parent').length > 0 || e.toElement.classList.contains('horizontal-bar'))) {
            if (!$(this).hasClass('active')) {
              $(this).addClass('active')
            }
          } else {
            $('#tab_content_clone_module_' + ModuleID).css({
              height: 0,
              display: 'none'
            })
          }
        }
      });
    } else if (TabSwitch == 'click') {
      $('#module_' + ModuleID + ' .tabContainer .nav li').off('click.click').on('click', function () {
        // 在浏览器标识为手机端时,不显示的tab项的优酷视频内容高度会被优酷直接设置为0px,必须重新赋值更新内容
        var elemIndex = $(this).index();
        recordIndex = elemIndex + 1
        var contentElem = $('#module_' + ModuleID).find($(this).find('a').attr('href'));
        if (!navigator.userAgent.match(/(iPhone|iPod|Android|ios|SymbianOS)/i) || contentElem.find('iframe').length == 0 || elemIndex == 0) {
          return
        }
        if (!contentElem.data('insert-html')) {
          contentElem.find('iframe').each(function (index, elem) {
            $(elem).attr('src', elem.src)
          })
          contentElem.data('insert-html', true)
        }
      });
    }
    ;
    $('#module_' + ModuleID + ' a[data-toggle=tab]').on('shown.bs.tab', function () {
      // 获取子节点的高度赋值给父节点
      // 展示悬浮
      if (isSuspend == '1') {
        showDropMenu(ModuleID,this);
      }
      var id = $(this).attr('href');
      $(id).find('*').each(function () {
        if ($(this).data('masonry')) {
          $(this).masonry();
        }
        if ($(this).is('.ModuleItem')) {
          var moduleid = ($(this).attr('id') || '').replace(/module_/i, '');
          var initFunc = window['initFunc' + moduleid];
          if (typeof initFunc == 'function') {
            initFunc();
          }
        }
      });
      //$(id + ' .masonry-container').masonry();
    });
    var blooer = true;//地图只要重新初始化一遍
    var tabid = '';
    $('#module_' + ModuleID + ' a[data-toggle=tab]').on('shown.bs.tab', function () {
      initFuncCommon($($(this).attr('href')));
      for (var key in window) {
        // 当为地图模块时要重新初始化
        if (key.substr(0, 11) == 'initMapFunc') {
          var mid = key.replace(/[^0-9]/g, '');
          // 横向排列的标签
          if ($('#tab_content_clone_module_' + ModuleID).length > 0 && $('#tab_content_clone_module_' + ModuleID + ' .tab-pane').eq($(this).parent().index()).find("#module_" + mid).length > 0) {
            var fn = window[key]
            $('#tab_content_clone_module_' + ModuleID).queue(function () {
              fn()
              $(this).parent().dequeue()
            })
          }
          if ($("#module_" + ModuleID + " .tab-pane").eq($(this).parent().index()).find("#module_" + mid).length > 0) {
            var fun = window[key];
            // 使用定时器是因为，直接初始化时某些节点未生成导致地图标题初始化不正确
            var funTime = setInterval(function() {
              fun()
              clearInterval(funTime);
            }, 500);
          }
          // 纵向排列的标签
          else if ( $(this).parent().closest('.Nav-Container').find('.tabContentGiantWb #module_' + mid).length > 0) {
            //  将swiper初始化放到动画队列里面，防止动画还没完成就初始化
            $(this).parent().closest('.Nav-Container').find('.tabContentGiantWb #module_' + mid).queue(function () {
              var func = window[key];
              // 使用定时器是因为，直接初始化时某些节点未生成导致地图标题初始化不正确
              var funTime = setInterval(function() {
                func()
                clearInterval(funTime);
              }, 450);
              $(this).parent().dequeue()
            })
          }
        }
      }
    })
    if ($.inArray(parseInt(layout), [101, 102, 103, 104, 105, 106]) > -1) {
      commonDisplay($('#module_' + ModuleID + ' ul.Nav-Container li'), layout)
    }

    function commonDisplay(liObj, layout) {
      var liObjs = liObj;
      var totalLength = 0;
      var oneLength = 0;
      liObjs.each(function (index, el) {
        oneLength = $(el).outerWidth()
        totalLength += $(el).outerWidth();
      })
      if (layout == 105) {
        var margins = liObjs.css('margin-right').substring(0, 2);
        totalLength += Number(margins * 3);
      }
      if (totalLength <= $('#module_' + ModuleID + ' ul.Nav-Container').width()) {
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollLeft').css("display", "none");
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollRight').css("display", "none");
      }
    }

    $('#module_' + ModuleID + ' .Nav-Container ul').off('resize.a' + ModuleID);
    $('#module_' + ModuleID + ' .Nav-Container ul li').off('resize');
    // 110模块在大于屏幕宽度时出现按钮
    if ($.inArray(parseInt(layout), [110]) > -1) {
      var scrollIndex = 0;
      var translateIndex = 0;
      var totalLength = 0;
      var totalWidth = $('#module_' + ModuleID + ' .Nav-Container').outerWidth();
      var liObj = $('#module_' + ModuleID + ' .Nav-Container ul li');
      liObj.each(function (index, el) {
        totalLength += $(el).outerWidth();
      })
      if (totalLength <= totalWidth) {
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollLeft').css("display", "none");
        $('#module_' + ModuleID + ' .ModuleTabContainerV2Giant .btnScrollRight').css("display", "none");
      }
      $('#module_' + ModuleID + ' .Nav-Container ul').on('resize.a' + ModuleID, function () {
        scrollIndex = 0;
        totalLength = 0;
        translateIndex = 0;
        totalWidth = $('#module_' + ModuleID + ' .Nav-Container ul').outerWidth();
        liObj.each(function (index, el) {
          totalLength += $(el).outerWidth();
        });
        liObj.parent().css({'transform': 'translate(0px, 0)'});
      });
      liObj.on('resize', function () {
        $('#module_' + ModuleID + ' .Nav-Container ul').resize();
      })
      
      $('#module_' + ModuleID + ' .Nav-Container i').off('click.changeShow').on('click.changeShow', function () {
        liObj.parent().stop().css({
          'transition-duration': '0ms',
          '-moz-transition-duration': '0ms',
          '-webkit-transition-duration': '0ms',
          '-o-transition-duration': '0ms'
        });
        ;
        $(this).removeAttr('style');
        $(this).siblings().removeAttr('style');
        if ($(this).hasClass('btnScrollRight')) {
          scrollIndex = Math.floor(Math.abs(translateIndex) / liObj.eq(0).outerWidth()) + 1;
          if (scrollIndex * liObj.eq(0).outerWidth() + totalWidth >= totalLength) {
            scrollIndex -= 1;
            translateIndex = -totalLength + totalWidth;
            $(this).css('color', 'rgb(204, 204, 204)');
          } else {
            translateIndex = -scrollIndex * liObj.eq(0).outerWidth();
          }
          liObj.parent().css({'transform': 'translate(' + translateIndex + 'px, 0)'});
        } else {
          scrollIndex = Math.ceil(Math.abs(translateIndex) / liObj.eq(0).outerWidth()) - 1;
          if (scrollIndex < 0) {
            scrollIndex += 1;
            $(this).css('color', 'rgb(204, 204, 204)');
            translateIndex = 0;
          } else {
            translateIndex = -scrollIndex * liObj.eq(0).outerWidth();
          }
          if (scrollIndex == 0) {
            $(this).css('color', 'rgb(204, 204, 204)');
          }
          liObj.parent().css({'transform': 'translate(' + translateIndex + 'px, 0)'});
        }
      })
      var start = 0;
      if ($('#module_' + ModuleID + ' .Nav-Container ul li').width() * ($('#module_' + ModuleID + ' .Nav-Container ul li').length) >= $('#module_' + ModuleID + ' .Nav-Container ul').width()) {
        $('#module_' + ModuleID + ' .Nav-Container ul').off('touchstart').on('touchstart', function (e) {
          var parentWidth = totalWidth;
          start = e.originalEvent.targetTouches[0].pageX;
          $(this).css({
            'transition-duration': '0ms',
            '-moz-transition-duration': '0ms',
            '-webkit-transition-duration': '0ms',
            '-o-transition-duration': '0ms'
          });
          $(this).off('touchmove').on('touchmove', function (e) {
            var end = e.originalEvent.targetTouches[0].pageX - start;
            start = e.originalEvent.targetTouches[0].pageX;
            translateIndex = translateIndex + end;
            if (translateIndex > 0) {
              translateIndex = 0
            }
            if (translateIndex < -totalLength + parentWidth) {
              translateIndex = -totalLength + parentWidth;
            }
            $(this).css({'transform': 'translate(' + translateIndex + 'px, 0)'});
            return false;
          })
          $(this).off('touchend').on('touchend', function (e) {
            typeof e.parentDefault === 'function' && e.parentDefault()
          })
          e.stopPropagation();
        })
      }

    }
    if (layout == '110' || layout == '106' || layout == '103') {
      $(window).off('resize.' + ModuleID).on('resize.' + ModuleID, function () {
        // 当前屏幕不显示的时候隐藏body的内容（悬浮状态用到）
        if (!$('#module_' + ModuleID).is(':visible')) {
          $('body>[id$="_' + ModuleID + '"]').css('display', 'none')
        }
      });
    }
  } else if (layout == '107' || layout == '108' || layout == '109') {
    var module = $('#module_' + ModuleID);
    var windowWidth = window.innerWidth;
    //109禁用mouseenter
    if (layout == '109') {
      TabSwitch = 'click';
    }

    function portraitTab() {
      if (TabSwitch == 'click' || windowWidth < 768) {
        module.find('.TabConOption').off('click.click mouseenter.hover').on('click.click', function () {
          windowWidth = window.innerWidth;
          TabConContainershow(this, true)
          // 在浏览器标识为手机端时,不显示的tab项的优酷视频内容高度会被优酷直接设置为0px,必须重新赋值更新内容
          var elemIndex = $(this).closest('.TabConcontent').index();
          recordIndex = elemIndex + 1
          var contentElem = $(this).siblings('.tabContentGiantWb').find('.inTabConContainer');
          if (!navigator.userAgent.match(/(iPhone|iPod|Android|ios|SymbianOS)/i) || contentElem.find('iframe').length == 0 || elemIndex == 0) {
            return
          }
          if (!contentElem.data('insert-html')) {
            contentElem.find('iframe').each(function (index, elem) {
              $(elem).attr('src', elem.src)
            })
            contentElem.data('insert-html', true)
          }
        })
      } else {
        module.find('.TabConOption').off('mouseenter.hover click.click').on('mouseenter.hover', function () {
          TabConContainershow(this, false)
          // 在浏览器标识为手机端时,不显示的tab项的优酷视频内容高度会被优酷直接设置为0px,必须重新赋值更新内容
          var elemIndex = $(this).closest('.TabConcontent').index();
          recordIndex = elemIndex + 1
          var contentElem = $(this).siblings('.tabContentGiantWb').find('.inTabConContainer');
          if (!navigator.userAgent.match(/(iPhone|iPod|Android|ios|SymbianOS)/i) || contentElem.find('iframe').length == 0 || elemIndex == 0) {
            return
          }
          if (!contentElem.data('insert-html')) {
            contentElem.find('iframe').each(function (index, elem) {
              $(elem).attr('src', elem.src)
            })
            contentElem.data('insert-html', true)
          }
        })
      }
      ;
    }

    if (layout != '109') {
      if (canDesign != 1) {
        showShuffling($('#module_' + ModuleID + ' .Nav-Container'), layout)
      }
    }

    function TabConContainershow(obj, isc) {
      var tabContentGiantWb = $(obj).closest('.TabConcontent').find('.tabContentGiantWb');
      var TabConOptions = module.find('.TabConOption');
      var currentTabConcontent = $(obj).closest('.TabConcontent');
      var currentTabConcontentSbiling = currentTabConcontent.siblings();
      if (isc && windowWidth < 768 || layout == 109) {
        TabConOptions.removeClass('active');
        $(obj).addClass('active');
        if (layout != 107) {
          TabConOptions.find('.iconimg').removeClass('icon-jian');
          TabConOptions.find('.iconimg').addClass('icon-jia');
          //兄弟元素全部收回
          currentTabConcontentSbiling.find('.tabContentGiantWb').stop().slideUp(300);
          currentTabConcontentSbiling.find('.TabConOption').attr('toge', '0');
        }
        //自己如果是收起来的就展开
        if ($(obj).attr('toge') != 1) {
          tabContentGiantWb.stop().slideDown(300, function () {
            initFuncCommon(tabContentGiantWb)
          });
          $(obj).attr('toge', 1);
          $(obj).find('.iconimg').removeClass('icon-jia');
          $(obj).find('.iconimg').addClass('icon-jian');
        } else {
          //自己如果是展开的就展开收起来
          tabContentGiantWb.stop().slideUp(300);
          $(obj).attr('toge', '0');
          if (layout == 107) {
            $(obj).find('.iconimg').removeClass('icon-jian');
            $(obj).find('.iconimg').addClass('icon-jia');
          }
        }
      } else {
        TabConOptions.removeClass('active');
        $(obj).addClass('active');
        module.find('.tabContentGiantWb').css({
          'display': 'none'
        })
        tabContentGiantWb.css({
          'display': 'block'
        })
        initFuncCommon(tabContentGiantWb)
        currentTabConcontentSbiling.find('.TabConOption').attr('toge', '0');
        $(obj).attr('toge', '1');
      }
    }

    function windowResize() {
      windowWidth = window.innerWidth;
      if (layout != 109) {
        calculateTop(windowWidth)
      }
      portraitTab()
    }

    function calculateTop(windowWidth) {
      var top = 0;
      if (windowWidth > 767) {
        module.find('.TabConOption').each(function (ide, el) {
          $(el).css({
            'position': 'absolute',
            'left': '0',
            'top': top
          })
          top += $(el).outerHeight(true);
        })
        module.find('.TabConcontentWb').css({
          'min-height': top,
        })
      } else {
        module.find('.TabConOption').css({
          'position': "static"
        })
      }
    }

    $(window).off('resize.' + ModuleID).on('resize.' + ModuleID, function () {
      windowResize();
    });
    windowResize();
  }
}
