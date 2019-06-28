function searchGiantInit(moduleid, layout, options) {
  //绑定手机搜索框的事件
  function bindSearchMobileEvent() {
    $('#searchMobile_' + moduleid + '.module-search-mobile input[name=mobileKeyword]').off('keypress.submit').on('keypress.submit', function (evt) {
      evt = evt || window.event;
      if (evt.keyCode == 13) {
        syncData(2);
        formSumbit($('#search_' + moduleid));
        return false;
      }
    });
    var flag = 0;
    //弹出搜索页面
    $('#search_' + moduleid + ' :text[name=Keyword]').off('click.mobile').on('click.mobile', function (evt) {
      if ($(window).width() < 768 && $(this).is(':focus') && $('#searchMobile_' + moduleid).is(':visible')) {
        event.preventDefault();
        $(this).blur();
        $('#searchMobile_' + moduleid + '.module-search-mobile').animate({
            right: '0px'
          },
          500, function () {
            $('#searchMobile_' + moduleid + '.module-search-mobile :text[name=mobileKeyword]').focus();
            syncData(1);
          });
        flag = 1;
      }
    });
    //隐藏搜索页面
    $('#searchMobile_' + moduleid + ' .search-mobile-back').off('click.back').on('click.back', function () {
      if ($('.search-select-mobile-dropdown-container.module' + moduleid + ' .btn-group').length > 0) {
        $('#searchMobile_' + moduleid + ' .search-type-list .dropdown-toggle').click();
      }
      setTimeout(function () {
        $('#searchMobile_' + moduleid + '.module-search-mobile').animate({
            right: '-992px'
          },
          500, function () {
            syncData(2);
            flag = 0;
          });
      }, 600)


    });
    document.addEventListener('touchmove', function (event) {
      if (flag == 1) {
        event.preventDefault();
      }
    })

    $('#searchMobile_' + moduleid + ' .search-mobile-button').off().on('click', function (evt) {
      syncData(2);
      formSumbit($('#search_' + moduleid));
      return false;
    });

    addScript('./scripts/bootstrap/bootstrap-select/js/bootstrap-select.min.js', function () {
      $('#searchMobile_' + moduleid + ' .search-type-list').selectpicker({
        width: 'fit',
        container: '.search-select-mobile-dropdown-container.module' + moduleid,
        mobile: isMobileBroswer()
      });
      $('#module_' + moduleid + ' .searchTypePanel select').selectpicker({
        width: 'fit',
        container: '.ModuleSearchSelectDropdownContainer.module' + moduleid,
        mobile: isMobileBroswer()
      });
      $('#module_' + moduleid + ' .dropdown-menu,#searchMobile_' + moduleid + ' .dropdown-menu').css('opacity', $('#module_' + moduleid).css('opacity')).find('a').css('fontSize', '12px');
    });
  }

  //弹出框和非弹出框输入的数据做一下同步
  function syncData($type) {
    $type = $type || 1;//1为正常输入框同步到弹出框 2为弹出框同步到正常输入框
    if ($type == 1) {
      var searchItem = $('#module_' + moduleid + ' .searchTypePanel select').val(),
        searchKey = $('#search_' + moduleid + ' :text[name=Keyword]').val();
      $('#searchMobile_' + moduleid + ' input[name=mobileKeyword]').val(searchKey);
      $('#searchMobile_' + moduleid + ' .search-type-list').val(searchItem);
      $('#searchMobile_' + moduleid + ' .search-type-list').selectpicker('render');
    } else {
      var searchItem = $('#searchMobile_' + moduleid + ' .search-type-list').val(),
        searchKey = $('#searchMobile_' + moduleid + ' input[name=mobileKeyword]').val();
      $('#search_' + moduleid + ' :text[name=Keyword]').val(searchKey);
      $('#module_' + moduleid + ' .searchTypePanel select').val(searchItem);
      $('#module_' + moduleid + ' .searchTypePanel select').selectpicker('render');
    }
  }

  //提交表单，并且提交关键字SEO分析
  function formSumbit(form) {
    if (form) {
      // 如果表单存在这个节点并且值为空就赋值，用于做是否在编辑状态下的判断
      if ($(form).find('input[name="view"]')) {
          if ($(form).find('input[name="view"]').val() == '') {
              $(form).find('input[name="view"]').val('1')
          }
      }
      //提交关键字SEO分析
      $.post("/index.php?c=front/Seo&a=keywordParse", form.serializeArray());
      //提交查询表单
      form.submit();
    }
  }

  $('#search_' + moduleid + ' :text[name=Keyword]').off('keypress.submit').on('keypress.submit', function (evt) {
    evt = evt || window.event;
    if (evt.keyCode == 13) {
      formSumbit($(this).closest('form'));
      return false;
    }
  });

  $('#search_' + moduleid + ' .searchIcon,#search_' + moduleid + ' button[type="submit"]').off().on('click', function (evt) {
    formSumbit($(this).closest('form'));
    return false;
  });

  if ($('.ModuleSearchSelectDropdownContainer.module' + moduleid).length == 0) {
    $('body').append('<div class="ModuleSearchSelectDropdownContainer module' + moduleid + '"></div>');
  }
  if ($('.search-select-mobile-dropdown-container.module' + moduleid).length == 0) {
    $('body').append('<div class="search-select-mobile-dropdown-container module' + moduleid + '"></div>');
  }

  $(function () {
    var mobileSearch = $('#search_' + moduleid + " #searchMobile_" + moduleid).clone();
    $("body #searchMobile_" + moduleid).remove();
    $('body').append(mobileSearch);
    bindSearchMobileEvent();
    var searchform = $('#search_' + moduleid);
    if (window.location.getQueryString('view') == '1') {
      $('#search_' + moduleid).find('input[name="view"]').val('1');
    }
    $('#search_' + moduleid + ' .searchTypePanel select,#searchMobile_' + moduleid + ' .search-type-list').change(function () {
      if ($(this).val() == '1') {
        searchform.attr('action', options['NVAProductList'] + '/0');
      }
      if ($(this).val() == '2') {
        searchform.attr('action', options['NVANewsList'] + '/0');
      }
      if ($(this).val() == '3') {
        searchform.attr('action', options['NVADownList'] + '/0');
      }
    });
  });
}