<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name='renderer' content='webkit'/>
    <meta http-equiv='X-UA-Compatible' content='IE=Edge,chrome=1'/>
    <script>var viewWidth = window.screen.width;
        if (viewWidth< 768) {
            document.write('<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no"/>');
        } else {
            document.write('<style>@media screen and (min-width: 768px) and (max-width: 1199px) {html {zoom: 0.8;}}</style>');
        }</script>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>



    <title>{{ config('app.name', '门窗实业') }}</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/modulestylemobile.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/modulemobilenavtpl.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/iconfont.css') }}"/>


    <script type="text/javascript" src="{{ asset('js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/swiper.animate1.0.2.min.js') }}"></script>
    <link href="{{ asset('css/pagecss.css.css') }}" type='text/css' rel='stylesheet'/>
    <script>var SiteType = "1"; var CanDesign = "False"; var CanEditFront = 'False'; var SkinType = "3" || "2";var GridWidth = "1200px";var PageType="1";var DesignType="";
        var IsWeiXin = navigator.userAgent.toLowerCase().match(/MicroMessenger/i) == 'micromessenger';</script>
    <script src="{{ asset('js/pagejs.js') }}"></script>
    <script>loadStyleSheet('./share/jquery-ui-css/ui-lightness/jquery-ui-1.10.2.custom.min.css',CanDesign != 'True'); //非编辑模式下延时加载</script>
</head>
<body>

    @yield('content')

</body>
</html>
