<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name='renderer' content='webkit'/>
    <meta http-equiv='X-UA-Compatible' content='IE=Edge,chrome=1'/>
    <script>
        var viewWidth = window.screen.width;
        if (viewWidth < 768) {
            document.write('<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no"/>');
        } else {
            document.write('<style>@media screen and (min-width: 768px) and (max-width: 1199px) {html {zoom: 0.8;}}</style>');
        }
    </script>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>


    <title>{{ config('app.name', '门窗实业') }}-@yield('title')</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/animate.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/modulestylemobile.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/modulemobilenavtpl.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/swiper.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/iconfont.css') }}"/>


    <script type="text/javascript" src="{{ asset('static/js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('static/js/swiper.animate1.0.2.min.js') }}"></script>
    @yield('css')
    <script>
        var SiteType = "1";
        var CanDesign = "False";
        var CanEditFront = 'False';
        var SkinType = "3" || "2";
        var GridWidth = "1200px";
        var PageType = "1";
        var DesignType = "";
        var IsWeiXin = navigator.userAgent.toLowerCase().match(/MicroMessenger/i) == 'micromessenger';
    </script>
    <script src="{{ asset('static/js/pagejs.js') }}"></script>
    <script>
        loadStyleSheet('./share/jquery-ui-css/ui-lightness/jquery-ui-1.10.2.custom.min.css', CanDesign != 'True'); //非编辑模式下延时加载
    </script>
</head>
<body id="page_468177" class="module_bg_color">
<!-- 正常页面结构 -->
<!-- 手机导航 -->
<article class="ModuleMobileNavGiant layout-101 mobileNav-18466495" id="module_18466495"
         moduletype="ModuleMobileNavGiant">
    <section class="containers">
        <section id="MobileNav" class="mobileNav mobileNav_1">
            <header id="header">
                <a href="#" class="mm-hbtn">
                    <div class="lcbody" onclick="showMobileNavFloatLayer(this)">
                        <div class="lcitem top">
                            <div class="rect top">
                            </div>
                        </div>
                        <div class="lcitem bottom">
                            <div class="rect bottom">
                            </div>
                        </div>
                    </div>
                </a>
                <p>
                    <img src="./static/img/2018122818494502c742.png">
                </p>
            </header>
        </section>
        <div class="header-model">
        </div>
        <section id="MobileNavFloatLayer" class="mobileNavFloatLayer mobileNavFloatLayer_1">
            <nav class="micro-nav-item">
                <ul id="accordion">
                    <li class="clearfix border1px">
                        <a href="{{ url('/') }}" class="link " target="_self">
                            <p style="display: block;overflow: unset;margin-left: 0;left: 0;">
                                <i class="main-class-colorlump"></i>
                            </p>
                            <i class="about-us fl" style="background: none"></i>
                            <p class="fl maxlarge">首页</p>
                        </a>
                    </li>
                    <li class="clearfix border1px">
                        <a href="{{ route('brand') }}" class="link " target="_self">
                            <p style="display: block;overflow: unset;margin-left: 0;left: 0;">
                                <i class="main-class-colorlump"></i>
                            </p>
                            <i class="about-us fl" style="background: none"></i>
                            <p class="fl maxlarge">品牌故事</p><span class="more fr iconfont icon-jia"></span>
                        </a>
                        <ul class="clearfix subnav navul" style="display: none;">
                            <li class="borderTop1px">
                                <a href="{{ route('culture') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">品牌文化</p>
                                </a>
                            </li>
                            <li class="borderTop1px">
                                <a href="{{ route('team') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">公司团队</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="clearfix border1px">
                        <a href="{{ route('product') }}" class="link " target="_self">
                            <p style="display: block;overflow: unset;margin-left: 0;left: 0;">
                                <i class="main-class-colorlump"></i>
                            </p>
                            <i class="about-us fl" style="background: none"></i>
                            <p class="fl maxlarge">产品中心</p><span class="more fr iconfont icon-jia"></span>
                        </a>
                        <ul class="clearfix subnav navul" style="display: none;">
                            <li class="borderTop1px">
                                <a href="{{ route('product') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">推拉窗</p>
                                </a>
                            </li>
                            <li class="borderTop1px">
                                <a href="{{ route('product') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">铝包木</p>
                                </a>
                            </li>
                            <li class="borderTop1px">
                                <a href="{{ route('product') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">沐浴房</p>
                                </a>
                            </li>
                            <li class="borderTop1px">
                                <a href="{{ route('product') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">阳光房</p>
                                </a>
                            </li>
                            <li class="borderTop1px">
                                <a href="{{ route('product') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">木门</p>
                                </a>
                            </li>
                            <li class="borderTop1px">
                                <a href="{{ route('product') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">平开门</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="clearfix border1px">
                        <a href="{{ route('cooperation') }}" class="link " target="_self">
                            <p style="display: block;overflow: unset;margin-left: 0;left: 0;">
                                <i class="main-class-colorlump"></i>
                            </p>
                            <i class="about-us fl" style="background: none"></i>
                            <p class="fl maxlarge">合作加盟</p>
                        </a>
                    </li>
                    <li class="clearfix border1px">
                        <a href="{{ route('new') }}" class="link " target="_self">
                            <p style="display: block;overflow: unset;margin-left: 0;left: 0;">
                                <i class="main-class-colorlump"></i>
                            </p>
                            <i class="about-us fl" style="background: none"></i>
                            <p class="fl maxlarge">新闻中心</p><span class="more fr iconfont icon-jia"></span>
                        </a>
                        <ul class="clearfix subnav navul" style="display: none;">
                            <li class="borderTop1px">
                                <a href="{{ route('new') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">企业新闻</p>
                                </a>
                            </li>
                            <li class="borderTop1px">
                                <a href="{{ route('new') }}" class="link " target="_self">
                                    <p class="fl maxmiddle">行业新闻</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="clearfix border1px">
                        <a href="{{ route('contact') }}" class="link " target="_self">
                            <p style="display: block;overflow: unset;margin-left: 0;left: 0;">
                                <i class="main-class-colorlump"></i>
                            </p>
                            <i class="about-us fl" style="background: none"></i>
                            <p class="fl maxlarge">联系我们</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
    </section>
    <script>
        var dom = "#module_" + "18466495" + " #MobileNavFloatLayer";
        var ScrollFix = function (elem) {
            var u = navigator.userAgent;
            var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
            var startY, startTopScroll;
            elem.addEventListener('touchstart',
                function (event) {
                    if (isiOS) {
                        if (!$('body').hasClass('bodyabstre')) $('body').addClass('bodyabstre');
                    } else {
                        if (!$('body').hasClass('bodyfixd')) $('body').addClass('bodyfixd');
                    }
                    startY = event.touches[0].pageY;
                    startTopScroll = elem.scrollTop;
                    //当滚动条在最顶部的时候
                    if (startTopScroll <= 0) elem.scrollTop = 1;
                    //当滚动条在最底部的时候
                    if (startTopScroll + elem.offsetHeight >= elem.scrollHeight) elem.scrollTop = elem.scrollHeight - elem.offsetHeight - 1;
                },
                false);
        };
        ScrollFix($(dom).get(0));

        function onViewChange() {
            $('body').removeClass('bodyabstre').removeClass('bodyabstre');
            container.classList.toggle('view-change');
        }

        var container = document.querySelector('.containers');
        var bumen = document.querySelector('.lcbody');
        bumen.addEventListener('click', onViewChange);

        $(function () {
            var Accordion = function (el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;
                var links = this.el.find('.more');
                links.on('click', {
                        el: this.el,
                        multiple: this.multiple
                    },
                    this.dropdown)
            }
            Accordion.prototype.dropdown = function (e) {
                var $el = e.data.el,
                    $this = $(this),
                    $next = $this.parent().next();
                $next.slideToggle();
                $this.closest('li').toggleClass('open');
                $this.parent().parent().siblings().find('.navul').slideUp().parent().removeClass('open');
                $this.parent().siblings('ul').find('.navul').slideUp().parent().removeClass('open');
                // debugger
                if (!e.data.multiple) {
                    $el.find('.navul').not($this.parents($el.selector + ' li').find('.navul')).slideUp().parent().removeClass('open');
                }

                return false;
            }

            var accordion = new Accordion($('#accordion'), false);
        });
        initScroll();
    </script>
</article>
<!--分销顶部用户-->
<div id='userbar'>
</div>
<div id="pagebody" class="siteStyle pageStyle container-fluid pagebody_nav pagebody_nav_1">
    <div id='freemodulehelper' style='width:1200px;margin:0 auto;height:0px;overflow:hidden;'>
    </div>
    <div id='HeaderZone' ismodulecontainer='true'
         class=' HeaderContainer HeaderZoneContainer ZoneContainer HeaderZone ModuleContainer clearfix '>
        <div class="ModuleItem  StaticModule mhidden-xs" wo="1912" id="module_18467971">
            <div class="ModuleGridGiant layout-101 layout-color- module_18467971 clearfix">
                <!-- 主体 -->
                <div class='BodyCenter BodyCenter18467971 clearfix'>
                    <div class='ModuleGridContainer  ModuleGridContainer18467971' gridswidthmode='2'>
                        <div class='row ModuleSubContainer'>
                            <div class="gridBgVideo noBgVideo">
                                <video src="" class="bgVideo" autoplay="autoplay" loop="loop">
                                </video>
                                <div class="bgVideoMask">
                                </div>
                            </div>
                            <div id='Sub18467971_1'
                                 class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-3 col-md-3 col-lg-3'
                                 positiontype='2' ismodulecontainer='true'>
                                <div class="ModuleItem  StaticModule " wo="300" id="module_18467998">
                                    <div class="ModuleImageGiant layout-101 layout-color- module_18467998 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18467998 clearfix'>
                                            <img class="image-animation" src="static/img/20190326103933fa37eb.png"
                                                 url="/comdata/997/201903/20190326103933fa37eb.png" alt="图片展示"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='clearfix visible-xs'>
                            </div>
                            <div id='Sub18467971_2'
                                 class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-9 col-md-9 col-lg-9'
                                 positiontype='2' ismodulecontainer='true'>
                                <div class="ModuleItem  StaticModule " wo="900" id="module_18467980">
                                    <div class="ModuleNavGiant layout-107 layout-color-blue module_18467980 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18467980 clearfix'>
                                            <div class='main-nav-content pre_nav clearfix' AlwaysShow="0"
                                                 SubAlign='left'>
                                                <div class="aroundMune">
                                                    <div class="moveMenuLeft iconfont icon-xiangzuojiantou">
                                                    </div>
                                                    <div class="moveMenuRight iconfont icon-xiangyoujiantou">
                                                    </div>
                                                </div>
                                                <div class="blank-solve">
                                                    <div class='main-nav-item-group' id="Menu_586221_18467980"
                                                         onmouseover="showSubMenu(this)"
                                                         onmouseout="hideSubMenu(this, event)">
                                                        <a href="{{ url('/') }}" target="_self" style="cursor:pointer"
                                                           class='main-nav-item fontm OneRow'>首页</a>
                                                        <!--获取二级菜单-->
                                                        <div id="SubMenu_586221_18467980" class='sub-nav-item-group'>
                                                        </div>
                                                    </div>
                                                    <div class='main-nav-item-group' id="Menu_586223_18467980"
                                                         onmouseover="showSubMenu(this)"
                                                         onmouseout="hideSubMenu(this, event)">
                                                        <a href="{{ route('brand') }}" target="_self" style="cursor:pointer" class='main-nav-item fontm OneRow'>品牌故事</a>
                                                        <!--获取二级菜单-->
                                                        <div id="SubMenu_586223_18467980" class='sub-nav-item-group'>
                                                            <a href="{{ route('culture') }}" target="_self" class='sub-nav-item OneRow'>品牌文化</a>
                                                            <a href="{{ route('team') }}" target="_self" class='sub-nav-item OneRow'>公司团队</a>
                                                        </div>
                                                    </div>
                                                    <div class='main-nav-item-group' id="Menu_586224_18467980"
                                                         onmouseover="showSubMenu(this)"
                                                         onmouseout="hideSubMenu(this, event)">
                                                        <a href="{{ route('product') }}" target="_self"
                                                           style="cursor:pointer" class='main-nav-item fontm OneRow'>产品中心</a>
                                                        <!--获取二级菜单-->
                                                        <div id="SubMenu_586224_18467980" class='sub-nav-item-group'>
                                                            <a href="{{ route('product') }}" target="_self"
                                                               class='sub-nav-item OneRow'>推拉窗</a>
                                                            <a href="{{ route('product') }}" target="_self"
                                                               class='sub-nav-item OneRow'>铝包木</a>
                                                            <a href="{{ route('product') }}" target="_self"
                                                               class='sub-nav-item OneRow'>沐浴房</a>
                                                            <a href="{{ route('product') }}" target="_self"
                                                               class='sub-nav-item OneRow'>阳光房</a>
                                                            <a href="{{ route('product') }}" target="_self"
                                                               class='sub-nav-item OneRow'>木门</a>
                                                            <a href="{{ route('product') }}" target="_self"
                                                               class='sub-nav-item OneRow'>平开门</a>
                                                        </div>
                                                    </div>
                                                    <div class='main-nav-item-group' id="Menu_586226_18467980"
                                                         onmouseover="showSubMenu(this)"
                                                         onmouseout="hideSubMenu(this, event)">
                                                        <a href="{{ route('cooperation') }}" target="_self"
                                                           style="cursor:pointer" class='main-nav-item fontm OneRow'>合作加盟</a>
                                                        <!--获取二级菜单-->
                                                        <div id="SubMenu_586226_18467980" class='sub-nav-item-group'>
                                                        </div>
                                                    </div>
                                                    <div class='main-nav-item-group' id="Menu_586230_18467980"
                                                         onmouseover="showSubMenu(this)"
                                                         onmouseout="hideSubMenu(this, event)">
                                                        <a href="{{ route('new') }}" target="_self" style="cursor:pointer"
                                                           class='main-nav-item fontm OneRow'>新闻中心</a>
                                                        <!--获取二级菜单-->
                                                        <div id="SubMenu_586230_18467980" class='sub-nav-item-group'>
                                                            <a href="{{ route('new') }}" target="_self"
                                                               class='sub-nav-item OneRow'>企业新闻</a>
                                                            <a href="{{ route('new') }}" target="_self"
                                                               class='sub-nav-item OneRow'>行业新闻</a>
                                                        </div>
                                                    </div>
                                                    <div class='main-nav-item-group' id="Menu_586232_18467980"
                                                         onmouseover="showSubMenu(this)"
                                                         onmouseout="hideSubMenu(this, event)">
                                                        <a href="{{ route('contact') }}" target="_self"
                                                           style="cursor:pointer" class='main-nav-item fontm OneRow'>联系我们</a>
                                                        <!--获取二级菜单-->
                                                        <div id="SubMenu_586232_18467980" class='sub-nav-item-group'>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                addScript('./skinp/modules/ModuleNavGiant/menu.js', function () {
                                                    initModuleNavGiant("18467980", "107", "0");
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='clearfix visible-lg'></div>
                            <div class='clearfix visible-xs'></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        addScript('./skinp/modules/ModuleGridGiant/modulegrid.js', function () {
                            initGridGiant("18467971", {isFloat: "0"});
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div  id='BodyMain1Zone' ismodulecontainer='true' class='BodyContainer BodyZoneContainer ZoneContainer ModuleContainer BodyMain1Zone clearfix '>
        @yield('content')
    </div>
    <div id='FooterZone' ismodulecontainer='true'
         class='FooterContainer FooterZoneContainer ZoneContainer FooterZone ModuleContainer clearfix'>
        <div class="ModuleItem  StaticModule mhidden-xs" wo="1912" id="module_18502670">
            <div class="ModuleGridGiant layout-101 layout-color- module_18502670 clearfix">
                <!-- 主体 -->
                <div class='BodyCenter BodyCenter18502670 clearfix'>
                    <div class='ModuleGridContainer  ModuleGridContainer18502670' gridswidthmode='2'>
                        <div class='row ModuleSubContainer'>
                            <div class="gridBgVideo noBgVideo">
                                <video src="" class="bgVideo" autoplay="autoplay" loop="loop">
                                </video>
                                <div class="bgVideoMask">
                                </div>
                            </div>
                            <div id='Sub18502670_1'
                                 class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-4 col-md-4 col-lg-4'
                                 positiontype='2' ismodulecontainer='true'>
                                <div class="ModuleItem  StaticModule " wo="400" id="module_18502715">
                                    <div class="ModuleImageGiant layout-101 layout-color- module_18502715 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18502715 clearfix'>
                                            <img class="image-animation" src="static/img/20190326104019358bea.png"
                                                 url="/comdata/997/201903/20190326104019358bea.png" alt="图片展示"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="ModuleItem  StaticModule " wo="400" id="module_18502717">
                                    <div class="ModuleImageTextGiant layout-101 layout-color-red module_18502717 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18502717 clearfix'>
                                            <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                 hasresponsive="1" autohide="0" hideheight="150" hidewidth="760">
                                                <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                    <p style="text-align: center;">
                                                        <a href="{{ route('brand') }}" target="_self" style="font-size: 14px; color: rgb(255, 255, 255); text-decoration: none;">
                                                            <span style="color: rgb(255, 255, 255); text-decoration: none;">品牌故事</span>
                                                        </a>
                                                        <span style="color: rgb(255, 255, 255); text-decoration: none;">｜
                                  <a href="{{ route('product') }}" target="_self" style="font-size: 14px; color: rgb(255, 255, 255); text-decoration: none;">
                                      <span style="color: rgb(255, 255, 255); text-decoration: none;">产品中心</span>
                                  </a>｜
                                  <a href="{{ route('cooperation') }}" target="_self" style="color: rgb(0, 0, 238); font-size: 14px; text-decoration: none;">
                                      <span style="font-size: 14px; color: rgb(255, 255, 255); text-decoration: none;">合作加盟</span>
                                  </a>｜<span style="color: rgb(255, 255, 255); text-decoration: none;">&nbsp;</span>
                                  <a href="{{ route('new') }}" target="_self" style="font-size: 14px; color: rgb(255, 255, 255); text-decoration: none;">
                                      <span style="color: rgb(255, 255, 255); text-decoration: none;">新闻中心</span>
                                  </a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <script>changeFontSize($('#module_18502717'));</script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='clearfix visible-xs'>
                            </div>
                            <div id='Sub18502670_2'
                                 class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-2 col-md-2 col-lg-2'
                                 positiontype='2' ismodulecontainer='true'>
                                <div class="ModuleItem  StaticModule " wo="200" id="module_18502723">
                                    <div class="ModuleImageGiant layout-101 layout-color- module_18502723 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18502723 clearfix'>
                                            <img class="image-animation" src="static/img/201812281907117aef1b.png"
                                                 url="/comdata/997/201812/201812281907117aef1b.png" alt="图片展示"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="ModuleItem  StaticModule " wo="200" id="module_18502787">
                                    <div class="ModuleImageTextGiant layout-101 layout-color-red module_18502787 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18502787 clearfix'>
                                            <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                 hasresponsive="1" autohide="0" hideheight="150" hidewidth="760">
                                                <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                    <p style="text-align: center;"><span
                                                                style="color: rgb(255, 255, 255);">微信公众号</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <script>changeFontSize($('#module_18502787'));</script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='clearfix visible-xs'>
                            </div>
                            <div id='Sub18502670_3'
                                 class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-2 col-md-2 col-lg-2'
                                 positiontype='2' ismodulecontainer='true'>
                                <div class="ModuleItem  StaticModule " wo="200" id="module_18502779">
                                    <div class="ModuleImageGiant layout-101 layout-color- module_18502779 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18502779 clearfix'>
                                            <img class="image-animation" src="static/img/201812281907117aef1b.png"
                                                 url="/comdata/997/201812/201812281907117aef1b.png" alt="图片展示"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="ModuleItem  StaticModule " wo="200" id="module_18502790">
                                    <div class="ModuleImageTextGiant layout-101 layout-color-red module_18502790 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18502790 clearfix'>
                                            <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                 hasresponsive="1" autohide="0" hideheight="150" hidewidth="760">
                                                <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                    <p style="text-align: center;">
                                                        <span style="color: rgb(255, 255, 255);">微信小程序</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <script>changeFontSize($('#module_18502790'));</script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='clearfix visible-xs'></div>
                            <div id='Sub18502670_4'
                                 class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-4 col-md-4 col-lg-4'
                                 positiontype='2' ismodulecontainer='true'>
                                <div class="ModuleItem  StaticModule " wo="400" id="module_18502732">
                                    <div class="ModuleImageTextGiant layout-101 layout-color-red module_18502732 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18502732 clearfix'>
                                            <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                 hasresponsive="1" autohide="0" hideheight="150" hidewidth="760">
                                                <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                    <p>
                                                        <a href="{{ route('contact') }}" target="_self" style="font-size: 24px; color: rgb(191, 191, 191); text-decoration: none;">
                                                            <span style="font-size: 24px; color: rgb(191, 191, 191); text-decoration: none;">联系我们</span>
                                                        </a>
                                                    </p>
                                                    <p><span style="font-size: 12px; color: rgb(191, 191, 191);">CONKACT US</span></p>
                                                    <p><br/></p>
                                                    <p><span style="color: rgb(191, 191, 191);">联系电话：400-800-0000<br/></span></p>
                                                    <p><span style="color: rgb(191, 191, 191);">电子邮箱：areia@654.com</span></p>
                                                    <p><span style="color: rgb(191, 191, 191);">公司地址：北京市某某某某工业大厦05188号15</span></p>
                                                </div>
                                            </div>
                                            <script>changeFontSize($('#module_18502732'));</script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='clearfix visible-lg'></div>
                            <div class='clearfix visible-xs'></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        addScript('./skinp/modules/ModuleGridGiant/modulegrid.js', function () {
                            initGridGiant("18502670", {isFloat: "0"});
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="ModuleItem  StaticModule " wo="1912" id="module_18502735">
            <div class="ModuleGridGiant layout-101 layout-color- module_18502735 clearfix">
                <!-- 主体 -->
                <div class='BodyCenter BodyCenter18502735 clearfix'>
                    <div class='ModuleGridContainer  ModuleGridContainer18502735' gridswidthmode='2'>
                        <div class='row ModuleSubContainer'>
                            <div class="gridBgVideo noBgVideo">
                                <video src="" class="bgVideo" autoplay="autoplay" loop="loop">
                                </video>
                                <div class="bgVideoMask">
                                </div>
                            </div>
                            <div id='Sub18502735_1'
                                 class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-12 col-md-12 col-lg-12'
                                 positiontype='2' ismodulecontainer='true'>
                                <div class="ModuleItem  StaticModule " wo="1200" id="module_18502754">
                                    <div class="ModuleImageTextGiant layout-101 layout-color-red module_18502754 clearfix">
                                        <!-- 主体 -->
                                        <div class='BodyCenter BodyCenter18502754 clearfix'>
                                            <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                 hasresponsive="1" autohide="0" hideheight="150" hidewidth="760">
                                                <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                    <p style="text-align: center;"><span
                                                                style="color: rgb(255, 255, 255); font-size: 12px;">某某门窗实业有限公司&nbsp; 版权所有&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 备案号： 粤ICP备12345678号&nbsp;</span>
                                                        <a href="http://sitemap.xml" target="_self"
                                                           style="font-size: 14px; color: rgb(255, 255, 255); text-decoration: none;"><span
                                                                    style="color: rgb(255, 255, 255); text-decoration: none;"><span
                                                                        style="text-decoration: none; color: rgb(255, 255, 255); font-size: 12px;">&nbsp;</span><span
                                                                        style="text-decoration: none; font-size: 12px; color: rgb(255, 255, 255);">网站地图</span></span>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                            <script>changeFontSize($('#module_18502754'));</script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='clearfix visible-lg'>
                            </div>
                            <div class='clearfix visible-xs'>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">addScript('./skinp/modules/ModuleGridGiant/modulegrid.js', function () {
                            initGridGiant("18502735", {isFloat: "0"});
                        });</script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 通栏模块 -->
<!-- 底部导航 -->
<div class="ModuleItem  " id="module_18466496">
    <div class="FootNavQRCode FootBar" style="z-index:899" onclick="QRShow();">
        <div class="FootNavMask">
        </div>
        <span class="FootNavQRCodeImg" style="display:block;">
          <img id="imgFootNavQrCode" style="width: 160px; height: 160px;" _src="/index.php?c=front/Qrcode&a=getFootNavQrCode"/>
        </span>
    </div>
    <div class="QQServices" style="z-index:1000" onclick="showService();">
        <div class="FootNavMask">
        </div>
        <ul class="QQList">
            <li class="QQCancel">取消</li>
        </ul>
    </div>
    <div id="MobileFootNavRenderElem" class="mobileNavRenderElem iconAndText" style="position:static;">
    </div>
    <div id="MobileFootNav" class="footer FootBar iconAndText" style="z-index:900;" bgcolorrelatedtomobilenav="0"
         ParamfontColor="" enable="1">
        <ul class="foot-nav-list" style="">
            <li style="width:33.33%; " itemid=2>
                <a href="tel:">
                    <span class="icon footTel" style=""></span>
                    <span class="itemText">电话咨询</span></a>
            </li>
            <li style="width:33.33%;" itemid=3>
                <a href="#top" target="_self">
                    <span class="icon footToTop" style=""></span>
                    <span class="itemText">置顶</span></a>
            </li>
            <li style="width:33.33%;display:none;" itemid=4>
                <a href="">
                    <span class="icon" style=""></span>
                    <span class="itemText">二维码</span></a>
            </li>
            <li style="width:33.33%;display:none;" itemid=5>
                <a href="">
                    <span class="icon" style=""></span>
                    <span class="itemText">返回</span></a>
            </li>
            <li style="width:33.33%;display:none;" itemid=6>
                <a href="">
                    <span class="icon" style=""></span>
                    <span class="itemText">前进</span></a>
            </li>
            <li style="width:33.33%;" itemid=7>
                <a onclick="showHomePage()" >
                    <span class="icon homePage" style=""></span>
                    <span class="itemText">首页</span></a>
            </li>
            <li style="width:33.33%;display:none;" itemid=8>
                <a href="">
                    <span class="icon" style=""></span>
                    <span class="itemText">在线客服</span></a>
            </li>
            <li style="width:33.33%;display:none;" itemid=9>
                <a href="">
                    <span class="icon" style=""></span>
                    <span class="itemText">购物车</span></a>
            </li>
            <li style="width:33.33%;display:none;" itemid=11>
                <a href="/ProductClassPage">
                    <span class="icon" style=""></span>
                    <span class="itemText">产品分类</span></a>
            </li>
        </ul>
    </div>
    <script type="text/javascript">
        function QRShow() {
            if (!$('#imgFootNavQrCode').attr('src')) {
                $('#imgFootNavQrCode').attr('src', $('#imgFootNavQrCode').attr('_src'));
            }
            $(".QQServices").hide();
            $(".FootNavQRCode").toggle();
            var dmHeight = $(".FootNavQRCodeImg").height();
            var sTop = $(".footer").offset().top - dmHeight;
            var left = $(".footer").offset().left;
            var width = $('#pagebody').width();

            if (navigator.platform.toLowerCase().indexOf("win") > -1) width = parseInt(width) - 17;
            if (typeof (modulesContainers) != 'undefined') {
                $(".FootNavQRCodeImg").css({
                    "width": $('#pagebody').width() - 6,
                    "bottom": $(".footer").height(),
                    "left": left + "px",
                    "height": dmHeight + "px"
                });
                $(".FootNavMask").css({
                    "width": "100%",
                    "height": $('#pagebody').outerHeight() + "px",
                    "top": $('#pagebody').offset().top + "px"
                });
            } else {
                $(".FootNavQRCodeImg").css({
                    "width": "192px",
                    "height": "192px",
                    "top": "initial",
                    "bottom": $('#MobileFootNav').innerHeight(),
                    "left": ($('body').outerWidth() / 2 - $(".FootNavQRCodeImg").outerWidth() / 2)
                });
                $(".FootNavMask").css({"width": "100%", "height": "100%", "top": "0"});
            }
            return false;
        }

        function gototop() {
            $('html,body').animate({scrollTop: 0}, 'slow');
        }

        function gotobottom() {
            var scrollHeight = $('body').prop("scrollHeight");
            $('html,body').animate({scrollTop: scrollHeight}, 'slow');
        }


        function ejectimg(obj, action) {
            //console.log(window.event);
            //如果是弹出窗口的
            //   var Aobj = $(document).find("a");
            //   $(Aobj).each(function(i,item){
            //         if($(item).attr('href').indexOf('javascript:ejectimg')>-1)
            //         {

            //             var divhtml="<div><img src='"+obj+"'/></div>"
            //             $(this).append(divhtml);
            //             console.log($(this).html());
            //             return false;
            //         }
            //   })
        }

        function showService() {
            $(".QQServices").show();
            $(".FootNavQRCode").hide();
            if (typeof (modulesContainers) != 'undefined') {
                $(".mobileNav").css("z-index", 10);
                var dmHeight = $(".QQList").outerHeight();
                var sTop = $(".footer").offset().top - dmHeight + 45;
                var left = $(".footer").offset().left;
                var width = $('#pagebody').width();
                if (navigator.platform.toLowerCase().indexOf("win") > -1) width = parseInt(width) - 17;
                $(".QQList").css({
                    "width": $('#pagebody').outerWidth() - 6 + "px",
                    "top": sTop + "px",
                    "left": left + "px",
                    "height": dmHeight + "px"
                });
                $(".FootNavMask").css({
                    "width": "100%",
                    "height": $('#pagebody').outerHeight() + "px",
                    "top": $('#pagebody').offset().top + "px"
                });
            } else {
                $(".QQList").css({
                    "bottom": "0px"
                });
                $(".FootNavMask").css({"width": "100%", "height": "100%", "top": "0"});
            }
            return false;
        }


        $(document).on("click", document.body, function (e) {
            if ($(e.target).hasClass("QQCancel")) {
                if (typeof (modulesContainers) != 'undefined') {
                    $(".QQList").removeAttr("style");
                }
                $(".QQServices").hide();
                e.stopPropagation();
            }
        });

        function showHomePage() {
            if (window.location.search.indexOf('view=1') > -1) {
                window.location.href = window.location.protocol + '//' + window.location.host + '?view=1&SiteType=1';
            } else {
                window.location.href = window.location.protocol + '//' + window.location.host + '?SiteType=1';
            }
        }

        $("#MobileFootNavRenderElem").remove();

        function getUrlParam(name) {
            //构造一个含有目标参数的正则表达式对象
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            //匹配目标参数
            var r = window.location.search.substr(1).match(reg);
            //返回参数值
            if (r != null) {
                return decodeURI(r[2]);
            }
            return null;
        }</script>
</div>
<!-- 正常页面结构 end -->
<!-- 单页滚屏页面结构 -->
<!-- 单页滚屏页面结构 end -->
<script type="text/javascript">var rawUrl = "";
    var Page = "YouZhan.SiteFront.HomeIndex";
    var PageID = "468177";
    var PageConf = {
        "EnableBodyTopZone": true,
        "EnableBodyFootZone": true,
        "EnableBodyLeftZone": false,
        "EnableBodyRightZone": false,
        "EnableBodyMain1Zone": true,
        "EnableBodyMain2Zone": false,
        "EnableBodyMain3Zone": false,
        "EnableBodyMain4Zone": false,
        "HeaderZonePositionType": 0,
        "FooterZonePositionType": 0,
        "BodyTopZonePositionType": 0,
        "BodyFootZonePositionType": 0,
        "BodyLeftZonePositionType": 0,
        "BodyRightZonePositionType": 0,
        "BodyMain1ZonePositionType": 0,
        "BodyMain2ZonePositionType": 0,
        "BodyMain3ZonePositionType": 0,
        "BodyMain4ZonePositionType": 0,
        "EnableFreeMain": true,
        "EnableBodyFullPage": true
    };
    var SCRIPT_NAME = "/index.php";
    var SiteType = "1";
    var IsUserCenter = "0";
    var hasFullSwitch = 0;
    var isPlatformVersion = "1";
    var ENABLE_FENXIAO = "";
    if (navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g, "") == "MSIE6.0" || navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g, "") == "MSIE7.0" || navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.split(";")[1].replace(/[ ]/g, "") == "MSIE8.0") {
        checkBowerTip();
    }
</script>
<!-- 加载设计界面所用的脚本和css -->
<script type='text/javascript'>delayload({
        id: ['pagebody'],
        src: './images/loading2.gif',
        bgsrc: './images/imgbg.png'
    });</script>
<!--统计代码-->
<script type='text/javascript'>var referrer = document.referrer + '';
    if (IsWeiXin && referrer == '') referrer = 'wechat.com';
    var countersrc = './index.php?c=Front/Count&Referer=' + escape(referrer) + '&Width=' + escape(screen.width) + '&Height=' + escape(screen.height) + '&Page=' + escape(window.location.pathname + window.location.search);
    document.write("<script async type='text/javascript' src='" + countersrc + "'></" + "script>");
    if (window.location.getQueryString) {
        var linkKID = window.location.getQueryString("linkKID");
        if (linkKID) {
            var linkKeySrc = './index.php?c=Front/Seo&a=innerLink&linkKID=' + linkKID;
            document.write("<script async type='text/javascript' src='" + linkKeySrc + "'></" + "script>");
        }
    }</script>
<script src="static/js/wow.min.js"></script>
<script>new WOW().init();</script>
<script>//手机版的产品详情页不需要页头页尾
    function showHeadFoot() {
        var showHF = $(window).width() < 700 && window.location.toString().toLowerCase().indexOf('productdetail') > -1;
        showHF ? $('#HeaderZone,#FooterZone').hide() : $('#HeaderZone,#FooterZone').show();
    }

    showHeadFoot();
    $(window).resize(showHeadFoot);
    if (!IsWeiXin) {
        addScript('./share/floaters.js', function () {
            addScript('./index.php?c=Front/IMPanel', null);
        });

    } else {
        addScript('/scripts/jweixin-1.0.0.js');
        addScript('/scripts/party/weixinshare.js?v=20180919002');
    }
    $(window).load(function () {
        if (IsWeiXin) {
            var match = window.location.href.match(/#invite(\d+)/i);
            var barurl = "./index.php?c=front/UserBar";
            if (match && match[1]) barurl += "&invite=" + match[1];
            if ("YouZhan.SiteFront.HomeIndex" == "YouZhan.SiteFront.HomeIndex" || "YouZhan.SiteFront.HomeIndex" == "YouZhan.SiteFront.NewsDetail" || "YouZhan.SiteFront.HomeIndex" == "YouZhan.SiteFront.ProductDetail") $("#userbar").load(barurl);
        }
    });
</script>
</body>
</html>