@extends('layouts.app')
@section('title','产品中心')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/productDetail.css') }}"/>
@endsection
@section('content')
    <div>
        <div class="ModuleItem  "  id="module_18480272"  >
            <div class="ModuleProductDetailGiant layout-101 layout-color-red module_18480272 clearfix">
                <!-- 主体 -->
                <div class='BodyCenter BodyCenter18480272 clearfix'>
                    <style type="text/css">#MobileNav,#MobileNavRenderElem,.ModuleProductDetail .ModuleHead,#UserBar,.ModuleMobileNavGiant{display: none!important;}
                    </style>
                    <script type="text/javascript" src="http://cdn.img-sys.com/skinp/common/mobile/js/html2canvas.js"></script>
                    <script type="text/javascript" src="http://cdn.img-sys.com/scripts/jQPlugins/qrcode/qrcode.js"></script>
                    <script type="text/javascript" src="http://cdn.img-sys.com/scripts/jQPlugins/qrcode/jquery.qrcode.js"></script>
                    <script  type="text/javascript" src="http://cdn.img-sys.com/share/clipboard/clipboard.min.js"></script>
                    <link rel="stylesheet" type="text/css" href='http://cdn.img-sys.com/scripts/videojs/css/video-js.css'>
                    </link>
                    <script type="text/javascript">$(function(){
                            // 给微信分享用的
                            if($('.preview-item').find('img').length >0){
                                $($('.inSwiper-slide').find('img')[0]).clone().prependTo('body').css('display', 'none');
                            }else{
                                $("<img src='../static/img/20181228093919DB5FDFEF76D44CD6_s.png' style='display:none;' />").prependTo('body');
                            }
                        });</script>
                    <div class="ModuleProduteDetailMain" layout="101">
                        <input type="hidden" name="ProductID" value="2511247">
                        <div class="clear_floatx inModuleProduteDetailTop">
                            <div class="swiperBox" >
                                <div class="pro-big-pic-wb">
                                    <div id="pro-bigPic" class="swiper-container gallery-top"  rel ="">
                                        <div class="ProVideoDiv"  style="display:none">
                                            <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" style='width:100%;height:100%' x5-playsinline="" playsinline="" webkit-playsinline="" data-setup="{}">
                                                <source src="" type='video/mp4' />
                                                <track kind="captions" src="demo.captions.vtt" srclang="en" label="English">
                                                </track>
                                                <!-- Tracks need an ending tag thanks to IE9 -->
                                                <track kind="subtitles" src="demo.captions.vtt" srclang="en" label="English">
                                                </track>
                                                <!-- Tracks need an ending tag thanks to IE9 -->
                                            </video>
                                            <i class='iconfont icon-guanbi' style='position:absolute;right:7%;top:0%;font-size:18px;color:white;display:none;'></i>
                                        </div>
                                        <div class="swiper-wrapper" >
                                            @if($product->pictures)
                                                @foreach($product->pictures as $picture)
                                                    <div class="swiper-slide" rel = "{{asset('upload')}}/{{ $picture }}"  >
                                                        <div class="inSwiper-slide"  style="background:url({{asset('upload')}}/{{ $picture }}) center no-repeat;background-size:contain" data-old-src = "{{asset('upload')}}/{{ $picture }}">
                                                            <!--手机端图片有个长按功能，必须放img进去不然无法保存图片-->
                                                            <img class="inSlide-size mobile-inSlide-size" src="{{asset('upload')}}/{{ $picture }}" alt="" >
                                                            <img class="inSlide-size pc-inSlide-size" src="{{ asset('../static/img/touming.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="swiper-slide" rel = "{{asset('upload')}}/{{ $product->thumb }}"  >
                                                    <div class="inSwiper-slide"  style="background:url({{asset('upload')}}/{{ $product->thumb }}) center no-repeat;background-size:contain" data-old-src = "{{asset('upload')}}/{{ $product->thumb }}">
                                                        <!--手机端图片有个长按功能，必须放img进去不然无法保存图片-->
                                                        <img class="inSlide-size mobile-inSlide-size" src="{{asset('upload')}}/{{ $product->thumb }}" alt="" >
                                                        <img class="inSlide-size pc-inSlide-size" src="{{ asset('../static/img/touming.png') }}" alt="">
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="swiper-pagination">
                                        </div>
                                        <!-- Add Arrows -->
                                    </div>
                                    <a class="back-btn" href="javascript:;">
                                        <img src="../static/img/back1.png" alt="">
                                    </a>
                                    <span class="mob-enquiry" href="javascript:void(0)" style="z-index: 1000">
                                        <i class="iconfont icon-xunpan1" style="color: #7F7F7F; font-size: 32px"></i>
                                    </span>
                                    <!--mobile fujian-->
                                    <a href="javascript:;" class="img-text-detail">图文<br/>详情</a>
                                </div>
                                <div class="gallery-thumbswb detail-dialog-control18480272">
                                    <div id="pro-thumbnail" class="swiper-container gallery-thumbs">
                                        <div class="swiper-wrapper">
                                            @if($product->pictures)
                                                @foreach($product->pictures as $picture)
                                                    <div class="swiper-slide">
                                                        <div class="inSwiper-slide" style="background:url({{asset('upload')}}/{{ $picture }}) center no-repeat;background-size: contain" data-old-src = "{{asset('upload')}}/{{ $picture }}">
                                                            <img class="inSlide-size mobile-inSlide-size" src="{{asset('upload')}}/{{ $picture }}" alt="" >
                                                            <img class="inSlide-size pc-inSlide-size" src="{{ asset('../static/img/touming.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="swiper-slide">
                                                    <div class="inSwiper-slide" style="background:url({{asset('upload')}}/{{ $product->thumb }}) center no-repeat;background-size: contain" data-old-src = "{{asset('upload')}}/{{ $product->thumb }}">
                                                        <img class="inSlide-size mobile-inSlide-size" src="{{asset('upload')}}/{{ $product->thumb }}" alt="" >
                                                        <img class="inSlide-size pc-inSlide-size" src="{{ asset('../static/img/touming.png') }}" alt="">
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div><!--
                      <img class="pro-thumbnail-next pro-thumbnail-direction" src="/skinp/modules/ModuleProductDetailGiant/images/back.png" alt="">
                      <img class="pro-thumbnail-prev pro-thumbnail-direction" src="/skinp/modules/ModuleProductDetailGiant/images/arrow.png" alt="">--><span class="pro-thumbnail-prev pro-thumbnail-direction iconfont icon-xiangyoujiantou " ></span><span class="pro-thumbnail-next pro-thumbnail-direction iconfont icon-xiangzuojiantou " ></span>
                                </div>
                            </div>
                            <div class="introduce ">
                                <div class="introduceTop">
                                    <p class="pro-row pd-b14 mobilepd"><span class="pro-name">{{ $product->name }}</span>
                                        <!--<span class="icon-qrcode">
                                            <img src="/skinp/modules/ModuleProductDetailGiant/images/qrcode.png" alt="">
                                            </span>-->
                                    </p>
                                    <p class="pro-row old-price">
                                        <span class="pro-price colorSeries">待议</span>
                                        <span class="sharAndCollect">
                                            <strong class="pro-shar shareImg-mobile-btn">
                                                <i class="iconfont icon-fenxiang2 collect-icon "></i><b>分享</b>
                                            </strong>
                                        </span>
                                    </p>
                                </div>
                                <div class="introduceBottom">
                                    <p class="pro-row pcSharAndCollect">
                                        <button class="pro-btn pro-btn-share active" type="button">
                                            <i class="iconfont icon-fenxiang2" style="    padding-right:7px;font-size: 13px;"></i>分享
                                            <div class="pc-share-list-wb">
                                                <ul class="pc-share-list clear_floatx">
                                                    <li class="pc-share-list-text"><span>分享到：</span></li>
                                                    <li class="inpc-share" data-cmd="qzone">
                                                        <img src="../images/qzone.jpg" alt="">
                                                    </li>
                                                    <li class="inpc-share" data-cmd="sqq">
                                                        <img data-cmd="sqq" src="../images/QQ.jpg" alt="">
                                                    </li>
                                                    <li class="inpc-share" data-cmd="tsina">
                                                        <img src="../images/weibo.jpg" alt="">
                                                    </li>
                                                    <li class="inpc-share" data-cmd="weixin">
                                                        <img class="mg-r0" src="../images/wechat.jpg" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </button>
                                    </p>
                                </div>
                                <div class="introduceBottom">
                                    <button class="enquiry" type="button" style="width: 35%;height: 38px;border-width: 1px;border-style:solid;">立即询盘22
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="particulars">
                            <div class="swiper-container">
                                <ul id="myTab" class="nav nav-tabs particularsNavBox swiper-wrapper justify-content">
                                    <li class="active particularsNav swiper-slide">
                                        <a href="#home018480272" data-toggle="tab">产品详情</a>
                                    </li>
                                </ul>
                            </div>
                            <div style="height: 1px;background: #dbdbdb;">

                            </div>
                            <div class="particularsMain tab-content clearfix">
                                <div class="tab-pane fade in active" id="home018480272">
                                    {!! $product->content !!}
                                </div>
                            </div>
                        </div>
                        <div class="pro-chang-box clear_floatx">
                            <span class="por-prev fl change-btn">
                                @if($pre_product)
                                    <span class="next">
                                        <a href="/productDetail/{{$pre_product->id}}">pre&nbsp;:&nbsp;{{$pre_product->name}}</a>
                                    </span>
                                @endif
                            </span>
                            <span  class="por-next fr change-btn">
                                @if($next_product)
                                    <span class="next">
                                        <a href="/productDetail/{{$next_product->id}}">next&nbsp;:&nbsp;{{$next_product->name}}</a>
                                    </span>
                                @endif
                            </span>
                        </div>
                        <script type="text/javascript">
                            function createQrcodeImg(){
                                var shareContent = document.querySelector("#shareContent");// 需要绘制的部分的 (原生）dom 对象 ，注意容器的宽度不要使用百分比，使用固定宽度，避免缩放问题
                                var width = shareContent.offsetWidth;  // 获取(原生）dom 宽度
                                var height = shareContent.offsetHeight; // 获取(原生）dom 高
                                var offsetTop = shareContent.offsetTop;  //元素距离顶部的偏移量
                                var canvas = document.createElement('canvas');  //创建canvas 对象
                                var context = canvas.getContext('2d');
                                var scaleBy = 2.5;  //获取像素密度的方法 (也可以采用自定义缩放比例)
                                canvas.width = width * scaleBy;   //这里 由于绘制的dom 为固定宽度，居中，所以没有偏移
                                canvas.height = (height + offsetTop) * scaleBy;  // 注意高度问题，由于顶部有个距离所以要加上顶部的距离，解决图像高度偏移问题
                                context.scale(scaleBy, scaleBy);
                                var opts = {
                                    allowTaint:true,//允许加载跨域的图片
                                    tainttest:true, //检测每张图片都已经加载完成
                                    scale:scaleBy, // 添加的scale 参数
                                    canvas:canvas, //自定义 canvas
                                    //logging: true, //日志开关
                                    width:width, //dom 原始宽度
                                    height:height //dom 原始高度
                                };
                                html2canvas(shareContent, opts).then(function (canvas) {
                                    var dataUrl = canvas.toDataURL();
                                    var newImg = document.createElement("img");
                                    newImg.src =  dataUrl;
                                    $('.img-show').html(newImg);
                                    $('#shareContent').remove();
                                    $('.imgmodal-txt').removeClass('showhide');
                                });
                            }

                            function isIOS(){
                                var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串
                                if(userAgent.indexOf('iPhone') >-1){
                                    return true;
                                }else{
                                    return false;
                                }
                            }
                            $(document).ready(function(){
                                // 解决图片跨域 无法生成分享图的问题  图片链接 加 http 不再有跨域问题
                                // var img=new Image;
                                // var imgUrl = $('.html2canvas .pro-img-deail').attr('imgurl');
                                // img.onload=function(){
                                //   	var old_canvas=document.createElement("canvas");
                                //   	old_canvas.width=img.width,old_canvas.height=img.height;
                                //   	var g=old_canvas.getContext("2d");
                                //   	g.drawImage(img,0,0,img.width,img.height);
                                //   	var newUrl = old_canvas.toDataURL();
                                //   	$('.html2canvas .pro-img-deail').css("backgroundImage","url(" + newUrl + ")");
                                // };
                                // img.crossOrigin="anonymous"; //关键
                                // img.src=imgUrl;
                                // end
                                showqrcode();
                            });
                            function showqrcode(){
                                $('.shareImg-mobile-btn').unbind().on('click',function(){
                                    $('.imgmodal').show();
                                    if(!$('.img-show').hasClass('imghas')){
                                        $('.imgmodal-txt').addClass('showhide');
                                        $('.img-show').addClass('imghas');
                                        var qrurl = $('#qrurl').val();
                                        if("" != ''){
                                            var logourl = "?cdn=0";
                                            var params = {text:window.location.protocol+'//'+qrurl,logo:logourl,width:92,height:92,logoborder:1,logowidth:30,logoheight:30,logopadding:2};
                                        }
                                        else{
                                            var params = {text:window.location.protocol+'//'+qrurl,width:92,height:92};
                                        }
                                        var cc = $('.html2canvas').html();
                                        $('.html2canvas').remove();
                                        $('#shareContent').html(cc);
                                        $('#jq-qrcode').qrcode(params);
                                        createQrcodeImg();
                                    }
                                    var scroll = $(document).scrollTop();
                                    $('body,html').addClass('overflow');
                                    $('.BodyCenter').addClass('fixed');
                                    $('.img-closebtn').off().on('click',function(){
                                        $('.imgmodal').hide();
                                        $('body,html').removeClass('overflow');
                                        $('.BodyCenter').removeClass('fixed');
                                        $(document).scrollTop(scroll);
                                    });
                                });
                            }
                            $(window).load(function(){
                                if(isIOS()){
                                    $('.copylink').remove();
                                }
                                var clipboard = new Clipboard('.copylink',{
                                    text:function(){
                                        return window.location.href;
                                    },
                                });
                                clipboard.on('success', function(e) {
                                    alert('复制成功！');
                                    e.clearSelection();
                                });
                                clipboard.on('error', function(e) {
                                    prompt('复制失败，请选中后手动复制！', window.location.href);
                                });
                            });
                        </script>
                        <style type="text/css">.html2canvas{width: 375px; display: none;}
                            #shareContent{width: 375px; position: fixed; top: 600px; z-index: 1; }
                            .pro-share-qrcode{background-color: #fff;}
                            .pro-name-deail{height: 100px; display: table-cell; vertical-align: middle; padding-left: 20px;padding-right:20px;width: 100%;}
                            .pro-img-deail{width: 100%;height:375px;background-repeat: no-repeat; background-position: center; background-size: cover;background-image:url(http://r472-mdemo.yz168.cc/comdata/997/product/20181228093919DB5FDFEF76D44CD6_s.png?cdn=0);}
                            .pro-share-qrcode-bottom{width:100%;position: relative;height: 151px;}
                            .bottom-bgimg{position: absolute;}
                            .bottom-div{position: absolute;display: table; height: 100%;}
                            .bottom-tr{display: table-row;}
                            .pro-share-qrcode-txt p{color: #fff;font-size: 14px;}
                            .pro-share-qrcode-txt{display: table-cell; vertical-align: middle;padding-left: 30px;}
                            .pro-share-qrcode-img{display: table-cell; vertical-align: middle;}
                            #jq-qrcode{position: relative; margin-left: 20px; background-color: #fff; padding: 5px;}
                            .imgmodal{display: none;filter: alpha(opacity=60); background-color: rgb(0, 0, 0); background-color: rgba(0, 0, 0, 0.6);position: fixed; top: 0; left: 0; bottom: 0; width: 100%; z-index: 9999; padding: 44px 44px 0 44px;overflow: overlay; }
                            .imgmodal-body{position: relative;}
                            .img-closebtn{position: absolute; right: -15px; top: -25px;}
                            .img-show img{border-radius: 10px;}
                            .imgmodal-txt{color: #fff; margin: 0 auto;margin-top: 10px;line-height: 1;width:180px;}
                            .copylink-ico,.downimg-ico{width: 25px; margin-right: 10px;}
                            .copylink,.downimg{margin-bottom: 5px;}
                            .copylink-txt,.downimg-txt{font-size: 12px;}
                            .copylink,.downimg{display: inline-block;}
                            .blur-div{ -webkit-filter: blur(5px); -moz-filter: blur(5px); -o-filter: blur(5px); -ms-filter: blur(5px); filter: blur(5px);}
                            .overflow{overflow: hidden;}
                            .share-qrcode{float: right; margin-right: 10px;cursor:pointer; }
                            .load-img{color: #fff; text-align: center; padding-top: 50px;}
                            .showhide{display: none!important;}
                        </style>
                        <div class="html2canvas">
                            <div class="pro-share-qrcode">
                                <div class="pro-name-deail">{{ $product->name }}
                                </div>
                                <div class="pro-img-deail ">
                                </div>
                                <div class="pro-share-qrcode-bottom"  style="background: #fff">
                                    <div class="bottom-bgimg">
                                    </div>
                                    <div class="bottom-div">
                                        <div class="bottom-tr">
                                            <div class="pro-share-qrcode-img">
                                                <div id="jq-qrcode">
                                                </div>
                                                <input type="hidden" id="qrurl" value="r472-mdemo.yz168.cc/ProductDetail/2511247.html?invite=0" />
                                            </div>
                                            <div class="pro-share-qrcode-txt">
                                                <p style="color:#333;font-size:14px">长按图片可保存到相册</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="shareContent">
                        </div>
                        <div class="imgmodal">
                            <div class="imgmodal-body">
                                <div class="img-closebtn">
                                    <img src="../static/img/close.png" width="25px">
                                </div>
                                <div class="img-show">
                                    <div class="load-img">
                                        <img src="../static/img/loading-0.gif" width="40px" alt="" />
                                        <div class="load-text" style="font-size: 14px;">图片加载中，请稍等 ...
                                        </div>
                                    </div>
                                </div>
                                <div class="imgmodal-txt" style="margin-top: 20px">
                                    <div class="copylink" style="margin-bottom: 10px">
                                        <img src="../static/img/link.png" class="copylink-ico" /><span class="copylink-txt">复制产品链接</span>
                                    </div>
                                    <div class="downimg" id="downimga">
                                        <img src="../static/img/down.png" class="downimg-ico" /><span class="downimg-txt">长按图片保存/分享</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="enquiryDailog18480272" class="enquiryDailog" >
                        <!--询盘表单手机端-->
                        <div class="mobileEnquriyHeader">
                            <div style="height: 44px;text-align: center;line-height: 44px">
                                <div style="width:44px;float: left;">
                                    <i class="iconfont icon-xiangzuojiantou" style="font-size: 14px;font-weight: bold"></i>
                                </div>
                                <div  class="mobileEnquirySpan"><span style="font-size: 16px;font-weight: bold">询盘</span>
                                </div>
                            </div>
                            <hr  style="width: 100%;margin: 0px"/>
                        </div>
                        <!--询盘表单-->
                        <div class="mainEnquiryDiv" style="width: 100%;">
                            <!--留言簿-->
                            <div id="enquiryFormDiv18480272"  class="enquiryFormDiv">
                                <div class="enquiryFormDiv2" >
                                    <p class="enquriyFormTitle" >咨询表单：</p>
                                    <div >
                                        <form id="EnquiryForm18480272" class="EnquiryForm" action="" method="post" onsubmit="return saveEnquiryMsg()" >
                                            <ul>
                                                <li>
                                                    <input type="text"  name="Contact"  class="form-control input-giant" style="border-radius: 4px;border:1px solid #EEEEEE;box-shadow:none" placeholder="联系人:"/><span style='position: absolute;right: 25px;display: none'></span>
                                                </li>
                                                <li>
                                                    <input type="text"  name="Tel" class="form-control input-giant" style="border-radius: 4px;border:1px solid #EEEEEE;box-shadow:none" placeholder="电  话/邮  箱:"/><span style='position: absolute;right: 25px;display: none'></span>
                                                </li>
                                                <li>
                                                    <textarea  name="Content" rows="10" class="form-control" style="height: 105px;border-radius: 4px;resize: none;border:1px solid #EEEEEE;box-shadow:none" placeholder="最多请输入 250 个字"></textarea>
                                                </li>
                                                <li style="margin-bottom: 10px;">
                                                    <img src="../index.php?c=validatecode" class="captchaImg" alt="请输入验证码"/>
                                                    <input type="text" id="VCode" name="VCode" class="form-control vcode" style="box-shadow:none;width: 290px;display: inline-block;border-radius: 4px;border:1px solid #EEEEEE"  placeholder="请输入验证码"/>
                                                </li>
                                                <li id="tipsEnquiryMsg18480272" style="text-align:center;color:red;display:none"><strong>留言成功</strong>
                                                    <br />留言提交成功，我们将会尽快处理您的留言
                                                    <br /><b style="color:#FF0000;"></b>
                                                </li>
                                                <li class="text-center">
                                                    <input type="submit" class="ModuleSubmitButton btn" style="background-color: #2fbeed;color:#ffffff;width:100%" value="提交"/>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--手机端传用-->
                            <div class="enquiryMobileCut">
                            </div>
                            <!--产品浏览列表-->
                            <div id="enquiryProDiv18480272"   class="enquiryProDiv" >
                                <span  class="enquiryClose" >
                                    <i class='iconfont icon-guanbi' style="font-size: 12px"></i>
                                </span>
                                <p class="enquiryProTitle" >咨询产品：</p>
                                <!--做到手机端要隐藏此线条-->
                                <hr  class="enquiryProHr"/>
                                <div class="enquiryPro" >
                                    <ul id="enquiryProList18480272" class="enquiryProList">
                                    </ul>
                                </div>
                            </div>
                            <!--无产品时候的显示-->
                            <div id="enquiryNonePorduct18480272">
                                <span  class="enquiryClose" >
                                    <i class='iconfont icon-guanbi' style="font-size: 12px"></i>
                                </span>
                                <div  class="enquiryNonePorduct">
                                    <img src="../static/img/enquiryNoPro.png" />
                                    <p class="enquiryNoProText" >你还没有添加任何产品！</p>
                                </div>
                            </div>
                        </div>
                        <div id="showcallback18480272">
                        </div>
                    </div>
                    <div style="width: 100%; left: 0px; top: 0px; height: 100%; position: fixed; user-select: none; z-index:999;background-color: #000;opacity: .3;filter: alpha(opacity=30);display: none" id="dask18480272">
                    </div>
                    <script>
                        var moduleId;
                        $(function(){
                            //show的回调
                            var scrollTop
                            var enquiryShowCall=function(pro_name,pro_id,pro_img,moduleid){
                                var Siteid=getCookie('InitSiteID');
                                var inviteid=getCookie('invite') || '';
                                moduleId=moduleid;
                                proArr=JSON.parse(localStorage.getItem('enquiryPro'+Siteid+inviteid)) || [];
                                scrollTop = $(window).scrollTop();
                                $('body').css({
                                    'overflow-y':'hidden',
                                    'top':-scrollTop
                                })
                                productcID=pro_id;
                                //需要判断是否浏览过次产品
                                var flag=false;
                                if(proArr!=[]){
                                    for(var i =0;i<proArr.length;i++){
                                        if(productcID==proArr[i]['productID']){
                                            flag= true;
                                            break;
                                        }
                                    }
                                }
                                if(!flag){
                                    var obj={};
                                    obj['name']=pro_name;
                                    obj['image']= pro_img;
                                    obj['productID']=productcID;
                                    proArr.push(obj);
                                    var  obj_str=JSON.stringify(proArr)
                                    localStorage.setItem('enquiryPro'+Siteid+inviteid,obj_str);
                                }
                                $('#enquiryProList'+moduleid).empty();
                                if(proArr!=[]){
                                    $html=""
                                    for(var i =0;i<proArr.length;i++){
                                        $html+='<li style="width:100%;float:left;margin:5px 0px;position:relative;border: 1px solid #EEEEEE;background-color: #ffffff;border-radius: 4px;"><div><div class="enquiryLiDel" productid="'+proArr[i]["productID"]+'"><span><i class="iconfont icon-iconshanchu62" ></i></span></div><img  src="'+proArr[i]["image"]+'"><span class="enquiryProName">'+proArr[i]["name"]+'</span></div></li>';
                                    }
                                    $('#enquiryProList'+moduleid).append($html);
                                }
                                $('#enquiryNonePorduct'+moduleid).css('display','none');
                                $('.enquiryNonePorduct').css('display','none');
                                $('#enquiryProDiv'+moduleid).show();
                                $('#enquiryFormDiv'+moduleid).show();
                                $('#dask'+moduleid).show();

                                $('#enquiryProList'+moduleid).off(".enquiryLiDel").on("click.enquiryLiDel",'.enquiryLiDel',function(){
                                    $(this).parents("li").remove();
                                    var Siteid=getCookie('InitSiteID');
                                    var inviteid=getCookie('invite') || '';
                                    proArr=JSON.parse(localStorage.getItem('enquiryPro'+Siteid+inviteid)) || [];
                                    for(var i =0;i<proArr.length;i++){
                                        if($(this).attr('productID')==proArr[i]['productID']){
                                            proArr.splice(i,1);
                                            break;
                                        }
                                    }

                                    if(proArr.length==0){
                                        $('#enquiryNonePorduct'+moduleid).css('display','block');
                                        $('.enquiryNonePorduct').css('display','block');
                                        $('#enquiryProDiv'+moduleid).hide();
                                        $('#enquiryFormDiv'+moduleid).hide();
                                    }
                                    var  obj_str=JSON.stringify(proArr)
                                    localStorage.setItem('enquiryPro'+Siteid+inviteid,obj_str);
                                })
                            }

                            $('#showcallback18480272').data('enquiryCallBack', enquiryShowCall);

                            $('[name="Content"]').val('');

                            $('#EnquiryForm18480272 img.captchaImg').off('click').on('click', function () {
                                var src = $('#EnquiryForm'+moduleId).find('img.captchaImg').attr('src').replace(/t=[^&]*/) + '&t=' + new Date().getTime();
                                $('#EnquiryForm'+moduleId).find('img.captchaImg').attr('src', src);
                            });
                            $('#EnquiryForm'+moduleId).find('img.captchaImg').click();
                        });

                        function saveEnquiryMsg(){
                            var validate = $("#EnquiryForm"+moduleId).validate({
                                rules: {
                                    Contact: {required:true,maxlength:30},
                                    Tel: {required:true, maxlength:30,TelOrMail:true},
                                    Addr: {required:true,maxlength:100},
                                    Content:{required:true,maxlength:250},
                                    VCode:"required"
                                },
                                messages: {
                                    Contact: {required:"请输入联系人姓名！",maxlength:''},
                                    Tel: { required:"请输入联系电话/邮箱！", maxlength: "" },
                                    Addr: { required: "请输入您的联系地址！" ,maxlength:''},
                                    Title: { required: "标题不能为空！" ,maxlength:''},
                                    Content: {required:"留言内容不能为空！",maxlength:''},
                                    VCode: "请输入验证码！"
                                },
                                wrapper: "span",
                                errorPlacement: function(error, element) {
                                    error.css("display","none");
                                    if(!element.attr("border")) element.attr("border",element.css("border"));
                                    if(error.text()){
                                        //这里会被重复调用所以不能使用弹框。
                                        element.attr("placeholder",error.text());
                                        element.css("border","1px solid #ca0000");
                                    }else{
                                        element.css("border",element.attr("border"));
                                    }
                                },
                                success: function(error, element) {
                                }
                            }).form();
                            if(!validate) return false;
                            if(""==1){
                                if(""!=1){
                                    alert("请先登录");
                                    return false;
                                }
                            }
                            var helperId = '#tipsEnquiryMsg' + moduleId;
                            $(helperId).show();
                            $(helperId).html("正在提交留言，请稍候...");
                            var parma=$('#EnquiryForm'+moduleId).serialize();
                            var Siteid=getCookie('InitSiteID');
                            var inviteid=getCookie('invite') || '';
                            proArr=JSON.parse(localStorage.getItem('enquiryPro'+Siteid+inviteid)) || [];
                            if(proArr!=[]){
                                var proid="";
                                for(var i =0;i<proArr.length;i++){
                                    proid+=","+proArr[i].productID;
                                }
                                proid=proid.substr(1)
                                parma+='&enquiryProID='+proid;
                            }
                            $.ajax({
                                type: 'POST',
                                url: '/index.php?c=Front/GuestBookSave',
                                data: parma,
                                cache : false,
                                dataType : 'json',
                                success : function(json){
                                    if(json.success){
                                        // 提交成功，清空数据
                                        $('#EnquiryForm'+moduleId+' input[type="text"]').val('');
                                        $('#EnquiryForm'+moduleId+' [name="Content"]').val('');
                                        localStorage.removeItem('enquiryPro'+Siteid+inviteid);
                                        $('#dask'+moduleId).hide();
                                        $("#enquiryDailog"+moduleId).hide();
                                        // tmpl.remove()
                                        if($('.ks-overlay-mask').length!=0){
                                            $('.ks-overlay-mask').hide();
                                        }
                                        var toTop = $(window).scrollTop()
                                        $('body').css({'overflow-y':'auto','top':''})
                                        $(window).scrollTop(toTop)
                                    }
                                    alert(json.msg);
                                },
                                complete: function(request, status){
                                    $(helperId).hide().html('');
                                }
                            });
                            return false;
                        }
                        $.validator.addMethod("TelOrMail", function(value, element) {
                            var regx = /((^(0\d{2,3})?\-?\d{6,8}$)|(^1\d{10}$))/;
                            // 非简体中文站走国际验证，只需验证是否按指定字符组合即可，不再验证格式
                            if (getCookie('Lang') != 'cn') {
                                regx = /((^(0\d{2,3})?\-?\d{6,8}$)|(^(\(|\)|\+|\-|\d){8,17}$))/;
                            }
                            if(!regx.test(value)){
                                if(!/^([0-9A-Za-z\-_\.]+)@([0-9a-z\-]+\.[a-z]{2,3}(\.[a-z]{2})?)$/g.test(value)){
                                    return false;
                                }else{
                                    return true;
                                }
                            }
                            return true;
                        });

                        $('#enquiryDailog18480272 .mobileEnquriyHeader').click(function (){
                            $('#enquiryDailog18480272').hide();
                            $('#dask18480272').hide();
                            $('.ks-overlay-mask').hide()
                        })
                        $('#enquiryDailog18480272 .icon-guanbi').click(function (){
                            $('#enquiryDailog18480272').hide();
                            $('#dask18480272').hide();
                            $('.ks-overlay-mask').hide()
                            $('body').css({'overflow-y':'auto','top':''})
                            var toTop = $(window).scrollTop()
                            $(window).scrollTop(toTop)
                        })
                    </script>
                    <style>
                        .enquiryProList {
                            text-align: center;
                        }
                        .enquiryProList img{
                            width: 60px;
                            height: 60px;
                            float: left;
                            margin : 10px 10px 10px 12px;
                        }
                        .enquiryProList .deleteitem{
                            color: red;
                            cursor:pointer;
                        }
                        .EnquiryForm li{
                            padding-bottom:14px ;
                        }

                        .enquiryDailog {
                            display: none;
                            z-index:10001;
                            width: 900px;
                            height:600px;
                            position: fixed;
                            background-color: #fff;
                            top:50%;
                            left:50%;
                            transform: translate(-50%,-50%);
                        }
                        .mainEnquiryDiv{
                            height: 100%;
                        }
                        .enquiryFormDiv{
                            float:left;
                            width: 55%
                        }
                        .enquiryFormDiv2{
                            padding-top: 97px;
                        }
                        .enquiryProDiv{
                            float: right;
                            width:calc(46% - 12px);
                            height: 100%;
                            background-color: #f7f8f9
                        }
                        .enquiryPro{
                            float: left;
                            padding-right: 10px;
                            overflow-y:auto;
                            overflow-x:hidden ;
                            height:85%;
                            padding-left: 24px;
                            width: 98%;
                        }
                        .enquiryClose{
                            float: right;
                            padding: 10px 12px 0px 0px
                        }
                        .EnquiryForm{
                            margin-left: 43px;
                            width: 84%
                        }
                        .enquiryProTitle{
                            margin-left: 26px;
                            font-size: 16px;
                            font-weight:bold;
                            width: calc(100% - 10px);
                            margin-top: 32px
                        }
                        .enquiryProHr{
                            margin:12px auto;
                        }
                        .mobileEnquriyHeader{
                            display: none;
                        }
                        .enquriyFormTitle{
                            font-size: 24px;
                            text-align: center;
                            font-weight:bold;
                            padding-bottom: 30px;
                            width: 100%;
                            line-height: 24px;
                        }
                        .enquiryLiDel{
                            float:right;
                            z-index: 10;
                            margin-top:12px;
                            margin-right: 12px;
                            background-color:#eeeeee;
                            border-radius: 50%;
                            color:#999999;
                            width: 7%;
                        }
                        .enquiryLiDel:hover{
                            color:red;
                            background-color: #ffcbcb;
                        }
                        .enquiryProName{
                            width:60%;
                            display: block;
                            margin-top: 12px;
                            float: left;
                            color:#666666;
                            text-align: left;
                            word-wrap: break-word;
                            word-break: normal;
                        }
                        .enquiryNoProText{
                            font-size: 18px;
                            color: #999999;
                            text-align: center;
                            padding-top: 30px
                        }
                        .enquiryNonePorduct{
                            display: none;
                            position:absolute;
                            top: 15%;
                            left: 50%;
                            transform:translate(-50%)
                        }

                        @media only screen and (min-width: 992px) and (max-width: 1199px){
                            .enquiryDailog {
                                width: 91%;
                                height:81%;
                            }
                        }
                        @media only screen and (min-width: 768px) and (max-width: 991px) {
                            .enquiryDailog {
                                width: 100%;
                                height: 100%;
                                overflow-y:auto;
                                overflow-x:hidden ;
                            }
                            .enquiryProList img{
                                width: 150px;
                                height: 150px;
                            }
                            .enquiryFormDiv{
                                float:none;
                                width: 100%
                            }
                            .enquiryProDiv{
                                float: none;
                                width:100%;
                                height: 100%;
                                background-color: #ffffff
                            }
                            .enquiryFormDiv2{
                                padding-top: 25px;
                            }
                            .enquiryPro{
                                float: none;
                                margin-right: 0px;
                                overflow-y:inherit;
                                height:100%;
                                margin-left: 0px;
                            }
                            .enquiryClose{
                                display: none;
                            }
                            .enquiryMobileCut{
                                height: 10px;
                                width: 100%;
                                background-color:#f7f8f9 ;
                            }
                            .enquiryProList img{
                                width: 61px;
                                height: 61px;
                                float: left;
                                margin : 8px 8px 8px 10px;
                            }
                            .EnquiryForm{
                                margin-left: 16px;
                                width: 96%
                            }
                            .enquiryProTitle{
                                margin-left: 0px;
                                font-size: 14px;
                                font-weight:bold;
                                width: 100%;
                                margin-top: 25px;
                                margin-bottom:20px ;
                                text-align: center;
                            }
                            .enquriyFormTitle{
                                margin-left: 0px;
                                font-size: 14px;
                                text-align: center;
                                font-weight:bold;
                                padding-bottom: 20px
                            }
                            .enquiryProHr{
                                display:none;
                            }
                            .mobileEnquriyHeader{
                                display: block;
                                text-align: center;
                                padding-top: 6px;
                            }
                            .enquiryLiDel{
                                width: 4%;
                            }
                            .enquiryProName{
                                width: 567px;
                            }
                            .mobileEnquirySpan{
                                padding-right: 9%
                            }
                            .EnquiryForm li:last-child{
                                padding-bottom: 25px;
                            }
                            .enquiryNoProText{
                                font-size: 14px;
                                color: #999999;
                                text-align: center;
                                padding-top: 30px
                            }
                            .enquiryNonePorduct{
                                display: none;
                                position:absolute;
                                top: 29%;
                                left: 50%;
                                transform:translate(-50%)
                            }
                        }
                        @media only screen and (max-width: 768px){
                            .enquiryDailog {
                                width: 100%;
                                height: 100%;
                                overflow-y:auto;
                                overflow-x:hidden ;
                            }
                            .enquiryProList img{
                                width: 150px;
                                height: 150px;
                            }
                            .enquiryFormDiv{
                                float:unset;
                                width: 100%
                            }
                            .enquiryProDiv{
                                float: none;
                                width:100%;
                                height: 100%;
                                background-color: #ffffff
                            }
                            .enquiryFormDiv2{
                                padding-top: 20px;
                            }
                            .enquiryPro{
                                float: unset;
                                margin-right: 0px;
                                overflow-y:unset;
                                height:100%;
                                margin-left: 0px;
                            }
                            .enquiryClose{
                                display: none;
                            }
                            .enquiryMobileCut{
                                height: 10px;
                                width: 100%;
                                background-color:#f7f8f9 ;
                            }
                            .enquiryProList img{
                                width: 61px;
                                height: 61px;
                                float: left;
                                margin : 8px 8px 8px 10px;
                            }
                            .EnquiryForm{
                                margin-left: 16px;
                                width: 92%
                            }
                            .enquiryProTitle{
                                margin-left: 0px;
                                font-size: 14px;
                                font-weight:normal;
                                width: 100%;
                                margin-top: 25px;
                                margin-bottom:10px ;
                                text-align: center;
                            }
                            .enquriyFormTitle{
                                margin-left: 0px;
                                font-size: 14px;
                                text-align: center;
                                font-weight:normal;
                                padding-bottom: 20px
                            }
                            .enquiryProHr{
                                display:none;
                            }
                            .mobileEnquriyHeader{
                                display: block;
                                text-align: center;
                                padding-top: 6px;
                            }
                            .mobileEnquirySpan{
                                padding-right: 16%
                            }
                            .EnquiryForm li:last-child{
                                padding-bottom: 25px;
                            }
                            .enquiryNoProText{
                                font-size: 14px;
                                color: #999999;
                                text-align: center;
                                padding-top: 30px
                            }
                            .enquiryNonePorduct{
                                display: none;
                                position:absolute;
                                top: 29%;
                                left: 50%;
                                transform:translate(-50%)
                            }
                        }
                    </style>
                    <!-- 公共弹窗组件 -->
                    <div data-pluns="detailDialog18480272" class="ks-overlay tb-viewer-overlay" ondragstart="return false;" >
                        <!-- 使用左右布局设置 -->
                        <div id="ks-content-ks-component18480272" class="ks-overlay-content">
                            <!-- 先制作相框 -->
                            <div class="tb-viewer-control"><span class="iconfont icon-xiangzuojiantou J_Viewer-arrow"></span>
                            </div>
                            <!-- 内容区 -->
                            <div class="tab-content tb-viewer-contents">
                                <!-- 查看原图 -->
                                @if($product->pictures)
                                    @foreach($product->pictures as $picture)
                                        <div class="tab-pannel-item">
                                            <a class="tb-viewer-original-pic" href="{{asset('upload')}}/{{ $picture }}" target="_blank" >查看原图</a>
                                            <img src="{{asset('upload')}}/{{ $picture }}" class="tab-pannel-image">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="tab-pannel-item">
                                        <a class="tb-viewer-original-pic" href="{{asset('upload')}}/{{ $product->thumb }}" target="_blank" >查看原图</a>
                                        <img src="{{asset('upload')}}/{{ $product->thumb }}" class="tab-pannel-image">
                                    </div>
                                @endif
                            </div>
                            <div class="tb-viewer-control"><span class="iconfont icon-xiangyoujiantou J_Viewer-arrow"></span>
                            </div>
                        </div>
                        <div class="tb-viewer-side">
                            <!-- 选择项 -->
                            <!-- 关闭按钮 -->
                            <i class="tb-viewer-icon iconfont icon-guanbi"></i>
                            <!-- 展示标题 --><h3 class="tb-viewer-title" title="{{ $product->name }}">{{ $product->name }}</h3>
                            <ul class="tb-viewer-indicators clearfix">
                                <li class="tb-viewer-thumb">
                                    <img src="{{asset('upload')}}/{{ $product->thumb }}">
                                </li>
                            </ul>
                            <a href="javascript:;" class="tb-viewer-btn J_ViewerXunPan" >立即询盘11</a>
                        </div>
                    </div>
                    <script type="text/tmplate" id="tmpl-18480272"><div style="width: 100%; left: 0px; top: 0px; height: 100%; position: fixed; user-select: none; z-index:999;background-color: #000;opacity: .3;filter: alpha(opacity=30);" class="ks-overlay-mask"></div></script>
                    <div id="enquiryDailog18480272" class="enquiryDailog" >
                        <!--询盘表单手机端-->
                        <div class="mobileEnquriyHeader">
                            <div style="height: 44px;text-align: center;line-height: 44px">
                                <div style="width:44px;float: left;">
                                    <i class="iconfont icon-xiangzuojiantou" style="font-size: 14px;font-weight: bold"></i>
                                </div>
                                <div  class="mobileEnquirySpan"><span style="font-size: 16px;font-weight: bold">询盘</span>
                                </div>
                            </div>
                            <hr  style="width: 100%;margin: 0px"/>
                        </div>
                        <!--询盘表单-->
                        <div class="mainEnquiryDiv" style="width: 100%;">
                            <!--留言簿-->
                            <div id="enquiryFormDiv18480272"  class="enquiryFormDiv">
                                <div class="enquiryFormDiv2" >
                                    <p class="enquriyFormTitle" >咨询表单：</p>
                                    <div >
                                        <form id="EnquiryForm18480272" class="EnquiryForm" action="" method="post" onsubmit="return saveEnquiryMsg()" >
                                            <ul>
                                                <li>
                                                    <input type="text"  name="Contact"  class="form-control input-giant" style="border-radius: 4px;border:1px solid #EEEEEE;box-shadow:none" placeholder="联系人:"/><span style='position: absolute;right: 25px;display: none'></span>
                                                </li>
                                                <li>
                                                    <input type="text"  name="Tel" class="form-control input-giant" style="border-radius: 4px;border:1px solid #EEEEEE;box-shadow:none" placeholder="电  话/邮  箱:"/><span style='position: absolute;right: 25px;display: none'></span>
                                                </li>
                                                <li>
                                                    <textarea  name="Content" rows="10" class="form-control" style="height: 105px;border-radius: 4px;resize: none;border:1px solid #EEEEEE;box-shadow:none" placeholder="最多请输入 250 个字"></textarea>
                                                </li>
                                                <li style="margin-bottom: 10px;">
                                                    <img src="../index.php?c=validatecode" class="captchaImg" alt="请输入验证码"/>
                                                    <input type="text" id="VCode" name="VCode" class="form-control vcode" style="box-shadow:none;width: 290px;display: inline-block;border-radius: 4px;border:1px solid #EEEEEE"  placeholder="请输入验证码"/>
                                                </li>
                                                <li id="tipsEnquiryMsg18480272" style="text-align:center;color:red;display:none"><strong>留言成功</strong>
                                                    <br />留言提交成功，我们将会尽快处理您的留言
                                                    <br /><b style="color:#FF0000;"></b>
                                                </li>
                                                <li class="text-center">
                                                    <input type="submit" class="ModuleSubmitButton btn" style="background-color: #2fbeed;color:#ffffff;width:100%" value="提交"/>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--手机端传用-->
                            <div class="enquiryMobileCut">
                            </div>
                            <!--产品浏览列表-->
                            <div id="enquiryProDiv18480272"   class="enquiryProDiv" ><span  class="enquiryClose" >
                              <i class='iconfont icon-guanbi' style="font-size: 12px"></i></span>
                                <p class="enquiryProTitle" >咨询产品：</p>
                                <!--做到手机端要隐藏此线条-->
                                <hr  class="enquiryProHr"/>
                                <div class="enquiryPro" >
                                    <ul id="enquiryProList18480272" class="enquiryProList">
                                    </ul>
                                </div>
                            </div>
                            <!--无产品时候的显示-->
                            <div id="enquiryNonePorduct18480272"><span  class="enquiryClose" >
                              <i class='iconfont icon-guanbi' style="font-size: 12px"></i></span>
                                <div  class="enquiryNonePorduct">
                                    <img src="../static/img/enquiryNoPro.png" />
                                    <p class="enquiryNoProText" >你还没有添加任何产品！</p>
                                </div>
                            </div>
                        </div>
                        <div id="showcallback18480272">
                        </div>
                    </div>
                    <div style="width: 100%; left: 0px; top: 0px; height: 100%; position: fixed; user-select: none; z-index:999;background-color: #000;opacity: .3;filter: alpha(opacity=30);display: none" id="dask18480272">
                    </div>
                    <script>
                        var moduleId;
                        $(function(){
                            //show的回调
                            var scrollTop
                            var enquiryShowCall=function(pro_name,pro_id,pro_img,moduleid){
                                var Siteid=getCookie('InitSiteID');
                                var inviteid=getCookie('invite') || '';
                                moduleId=moduleid;
                                proArr=JSON.parse(localStorage.getItem('enquiryPro'+Siteid+inviteid)) || [];
                                scrollTop = $(window).scrollTop();
                                $('body').css({
                                    'overflow-y':'hidden',
                                    'top':-scrollTop
                                })
                                productcID=pro_id;
                                //需要判断是否浏览过次产品
                                var flag=false;
                                if(proArr!=[]){
                                    for(var i =0;i<proArr.length;i++){
                                        if(productcID==proArr[i]['productID']){
                                            flag= true;
                                            break;
                                        }
                                    }
                                }
                                if(!flag){
                                    var obj={};
                                    obj['name']=pro_name;
                                    obj['image']= pro_img;
                                    obj['productID']=productcID;
                                    proArr.push(obj);
                                    var  obj_str=JSON.stringify(proArr)
                                    localStorage.setItem('enquiryPro'+Siteid+inviteid,obj_str);
                                }
                                $('#enquiryProList'+moduleid).empty();
                                if(proArr!=[]){
                                    $html=""
                                    for(var i =0;i<proArr.length;i++){
                                        $html+='<li style="width:100%;float:left;margin:5px 0px;position:relative;border: 1px solid #EEEEEE;background-color: #ffffff;border-radius: 4px;"><div><div class="enquiryLiDel" productid="'+proArr[i]["productID"]+'"><span><i class="iconfont icon-iconshanchu62" ></i></span></div><img  src="'+proArr[i]["image"]+'"><span class="enquiryProName">'+proArr[i]["name"]+'</span></div></li>';
                                    }
                                    $('#enquiryProList'+moduleid).append($html);
                                }
                                $('#enquiryNonePorduct'+moduleid).css('display','none');
                                $('.enquiryNonePorduct').css('display','none');
                                $('#enquiryProDiv'+moduleid).show();
                                $('#enquiryFormDiv'+moduleid).show();
                                $('#dask'+moduleid).show();

                                $('#enquiryProList'+moduleid).off(".enquiryLiDel").on("click.enquiryLiDel",'.enquiryLiDel',function(){
                                    $(this).parents("li").remove();
                                    var Siteid=getCookie('InitSiteID');
                                    var inviteid=getCookie('invite') || '';
                                    proArr=JSON.parse(localStorage.getItem('enquiryPro'+Siteid+inviteid)) || [];
                                    for(var i =0;i<proArr.length;i++){
                                        if($(this).attr('productID')==proArr[i]['productID']){
                                            proArr.splice(i,1);
                                            break;
                                        }
                                    }

                                    if(proArr.length==0){
                                        $('#enquiryNonePorduct'+moduleid).css('display','block');
                                        $('.enquiryNonePorduct').css('display','block');
                                        $('#enquiryProDiv'+moduleid).hide();
                                        $('#enquiryFormDiv'+moduleid).hide();
                                    }
                                    var  obj_str=JSON.stringify(proArr)
                                    localStorage.setItem('enquiryPro'+Siteid+inviteid,obj_str);
                                })
                            }

                            $('#showcallback18480272').data('enquiryCallBack', enquiryShowCall);

                            $('[name="Content"]').val('');

                            $('#EnquiryForm18480272 img.captchaImg').off('click').on('click', function () {
                                var src = $('#EnquiryForm'+moduleId).find('img.captchaImg').attr('src').replace(/t=[^&]*/) + '&t=' + new Date().getTime();
                                $('#EnquiryForm'+moduleId).find('img.captchaImg').attr('src', src);
                            });
                            $('#EnquiryForm'+moduleId).find('img.captchaImg').click();
                        });

                        function saveEnquiryMsg(){
                            var validate = $("#EnquiryForm"+moduleId).validate({
                                rules: {
                                    Contact: {required:true,maxlength:30},
                                    Tel: {required:true, maxlength:30,TelOrMail:true},
                                    Addr: {required:true,maxlength:100},
                                    Content:{required:true,maxlength:250},
                                    VCode:"required"
                                },
                                messages: {
                                    Contact: {required:"请输入联系人姓名！",maxlength:''},
                                    Tel: { required:"请输入联系电话/邮箱！", maxlength: "" },
                                    Addr: { required: "请输入您的联系地址！" ,maxlength:''},
                                    Title: { required: "标题不能为空！" ,maxlength:''},
                                    Content: {required:"留言内容不能为空！",maxlength:''},
                                    VCode: "请输入验证码！"
                                },
                                wrapper: "span",
                                errorPlacement: function(error, element) {
                                    error.css("display","none");
                                    if(!element.attr("border")) element.attr("border",element.css("border"));
                                    if(error.text()){
                                        //这里会被重复调用所以不能使用弹框。
                                        element.attr("placeholder",error.text());
                                        element.css("border","1px solid #ca0000");
                                    }else{
                                        element.css("border",element.attr("border"));
                                    }
                                },
                                success: function(error, element) {
                                }
                            }).form();
                            if(!validate) return false;
                            if(""==1){
                                if(""!=1){
                                    alert("请先登录");
                                    return false;
                                }
                            }
                            var helperId = '#tipsEnquiryMsg' + moduleId;
                            $(helperId).show();
                            $(helperId).html("正在提交留言，请稍候...");
                            var parma=$('#EnquiryForm'+moduleId).serialize();
                            var Siteid=getCookie('InitSiteID');
                            var inviteid=getCookie('invite') || '';
                            proArr=JSON.parse(localStorage.getItem('enquiryPro'+Siteid+inviteid)) || [];
                            if(proArr!=[]){
                                var proid="";
                                for(var i =0;i<proArr.length;i++){
                                    proid+=","+proArr[i].productID;
                                }
                                proid=proid.substr(1)
                                parma+='&enquiryProID='+proid;
                            }
                            $.ajax({
                                type: 'POST',
                                url: '/index.php?c=Front/GuestBookSave',
                                data: parma,
                                cache : false,
                                dataType : 'json',
                                success : function(json){
                                    if(json.success){
                                        // 提交成功，清空数据
                                        $('#EnquiryForm'+moduleId+' input[type="text"]').val('');
                                        $('#EnquiryForm'+moduleId+' [name="Content"]').val('');
                                        localStorage.removeItem('enquiryPro'+Siteid+inviteid);
                                        $('#dask'+moduleId).hide();
                                        $("#enquiryDailog"+moduleId).hide();
                                        // tmpl.remove()
                                        if($('.ks-overlay-mask').length != 0){
                                            $('.ks-overlay-mask').hide();
                                        }
                                        var toTop = $(window).scrollTop()
                                        $('body').css({'overflow-y':'auto','top':''})
                                        $(window).scrollTop(toTop)
                                    }
                                    alert(json.msg);
                                },
                                complete: function(request, status){
                                    $(helperId).hide().html('');
                                }
                            });
                            return false;
                        }
                        $.validator.addMethod("TelOrMail", function(value, element) {
                            var regx = /((^(0\d{2,3})?\-?\d{6,8}$)|(^1\d{10}$))/;
                            // 非简体中文站走国际验证，只需验证是否按指定字符组合即可，不再验证格式
                            if (getCookie('Lang') != 'cn') {
                                regx = /((^(0\d{2,3})?\-?\d{6,8}$)|(^(\(|\)|\+|\-|\d){8,17}$))/;
                            }
                            if(!regx.test(value)){
                                if(!/^([0-9A-Za-z\-_\.]+)@([0-9a-z\-]+\.[a-z]{2,3}(\.[a-z]{2})?)$/g.test(value)){
                                    return false;
                                }else{
                                    return true;
                                }
                            }
                            return true;
                        });

                        $('#enquiryDailog18480272 .mobileEnquriyHeader').click(function (){
                            $('#enquiryDailog18480272').hide();
                            $('#dask18480272').hide();
                            $('.ks-overlay-mask').hide()
                        })
                        $('#enquiryDailog18480272 .icon-guanbi').click(function (){
                            $('#enquiryDailog18480272').hide();
                            $('#dask18480272').hide();
                            $('.ks-overlay-mask').hide()
                            $('body').css({'overflow-y':'auto','top':''})
                            var toTop = $(window).scrollTop()
                            $(window).scrollTop(toTop)
                        })</script>
                    <style>
                        .enquiryProList {
                            text-align: center;
                        }
                        .enquiryProList img{
                            width: 60px;
                            height: 60px;
                            float: left;
                            margin : 10px 10px 10px 12px;
                        }
                        .enquiryProList .deleteitem{
                            color: red;
                            cursor:pointer;
                        }
                        .EnquiryForm li{
                            padding-bottom:14px ;
                        }

                        .enquiryDailog {
                            display: none;
                            z-index:10001;
                            width: 900px;
                            height:600px;
                            position: fixed;
                            background-color: #fff;
                            top:50%;
                            left:50%;
                            transform: translate(-50%,-50%);
                        }
                        .mainEnquiryDiv{
                            height: 100%;
                        }
                        .enquiryFormDiv{
                            float:left;
                            width: 55%
                        }
                        .enquiryFormDiv2{
                            padding-top: 97px;
                        }
                        .enquiryProDiv{
                            float: right;
                            width:calc(46% - 12px);
                            height: 100%;
                            background-color: #f7f8f9
                        }
                        .enquiryPro{
                            float: left;
                            padding-right: 10px;
                            overflow-y:auto;
                            overflow-x:hidden ;
                            height:85%;
                            padding-left: 24px;
                            width: 98%;
                        }
                        .enquiryClose{
                            float: right;
                            padding: 10px 12px 0px 0px
                        }
                        .EnquiryForm{
                            margin-left: 43px;
                            width: 84%
                        }
                        .enquiryProTitle{
                            margin-left: 26px;
                            font-size: 16px;
                            font-weight:bold;
                            width: calc(100% - 10px);
                            margin-top: 32px
                        }
                        .enquiryProHr{
                            margin:12px auto;
                        }
                        .mobileEnquriyHeader{
                            display: none;
                        }
                        .enquriyFormTitle{
                            font-size: 24px;
                            text-align: center;
                            font-weight:bold;
                            padding-bottom: 30px;
                            width: 100%;
                            line-height: 24px;
                        }
                        .enquiryLiDel{
                            float:right;
                            z-index: 10;
                            margin-top:12px;
                            margin-right: 12px;
                            background-color:#eeeeee;
                            border-radius: 50%;
                            color:#999999;
                            width: 7%;
                        }
                        .enquiryLiDel:hover{
                            color:red;
                            background-color: #ffcbcb;
                        }
                        .enquiryProName{
                            width:60%;
                            display: block;
                            margin-top: 12px;
                            float: left;
                            color:#666666;
                            text-align: left;
                            word-wrap: break-word;
                            word-break: normal;
                        }
                        .enquiryNoProText{
                            font-size: 18px;
                            color: #999999;
                            text-align: center;
                            padding-top: 30px
                        }
                        .enquiryNonePorduct{
                            display: none;
                            position:absolute;
                            top: 15%;
                            left: 50%;
                            transform:translate(-50%)
                        }

                        @media only screen and (min-width: 992px) and (max-width: 1199px){
                            .enquiryDailog {
                                width: 91%;
                                height:81%;
                            }
                        }
                        @media only screen and (min-width: 768px) and (max-width: 991px) {
                            .enquiryDailog {
                                width: 100%;
                                height: 100%;
                                overflow-y:auto;
                                overflow-x:hidden ;
                            }
                            .enquiryProList img{
                                width: 150px;
                                height: 150px;
                            }
                            .enquiryFormDiv{
                                float:none;
                                width: 100%
                            }
                            .enquiryProDiv{
                                float: none;
                                width:100%;
                                height: 100%;
                                background-color: #ffffff
                            }
                            .enquiryFormDiv2{
                                padding-top: 25px;
                            }
                            .enquiryPro{
                                float: none;
                                margin-right: 0px;
                                overflow-y:inherit;
                                height:100%;
                                margin-left: 0px;
                            }
                            .enquiryClose{
                                display: none;
                            }
                            .enquiryMobileCut{
                                height: 10px;
                                width: 100%;
                                background-color:#f7f8f9 ;
                            }
                            .enquiryProList img{
                                width: 61px;
                                height: 61px;
                                float: left;
                                margin : 8px 8px 8px 10px;
                            }
                            .EnquiryForm{
                                margin-left: 16px;
                                width: 96%
                            }
                            .enquiryProTitle{
                                margin-left: 0px;
                                font-size: 14px;
                                font-weight:bold;
                                width: 100%;
                                margin-top: 25px;
                                margin-bottom:20px ;
                                text-align: center;
                            }
                            .enquriyFormTitle{
                                margin-left: 0px;
                                font-size: 14px;
                                text-align: center;
                                font-weight:bold;
                                padding-bottom: 20px
                            }
                            .enquiryProHr{
                                display:none;
                            }
                            .mobileEnquriyHeader{
                                display: block;
                                text-align: center;
                                padding-top: 6px;
                            }
                            .enquiryLiDel{
                                width: 4%;
                            }
                            .enquiryProName{
                                width: 567px;
                            }
                            .mobileEnquirySpan{
                                padding-right: 9%
                            }
                            .EnquiryForm li:last-child{
                                padding-bottom: 25px;
                            }
                            .enquiryNoProText{
                                font-size: 14px;
                                color: #999999;
                                text-align: center;
                                padding-top: 30px
                            }
                            .enquiryNonePorduct{
                                display: none;
                                position:absolute;
                                top: 29%;
                                left: 50%;
                                transform:translate(-50%)
                            }
                        }
                        @media only screen and (max-width: 768px){
                            .enquiryDailog {
                                width: 100%;
                                height: 100%;
                                overflow-y:auto;
                                overflow-x:hidden ;
                            }
                            .enquiryProList img{
                                width: 150px;
                                height: 150px;
                            }
                            .enquiryFormDiv{
                                float:unset;
                                width: 100%
                            }
                            .enquiryProDiv{
                                float: none;
                                width:100%;
                                height: 100%;
                                background-color: #ffffff
                            }
                            .enquiryFormDiv2{
                                padding-top: 20px;
                            }
                            .enquiryPro{
                                float: unset;
                                margin-right: 0px;
                                overflow-y:unset;
                                height:100%;
                                margin-left: 0px;
                            }
                            .enquiryClose{
                                display: none;
                            }
                            .enquiryMobileCut{
                                height: 10px;
                                width: 100%;
                                background-color:#f7f8f9 ;
                            }
                            .enquiryProList img{
                                width: 61px;
                                height: 61px;
                                float: left;
                                margin : 8px 8px 8px 10px;
                            }
                            .EnquiryForm{
                                margin-left: 16px;
                                width: 92%
                            }
                            .enquiryProTitle{
                                margin-left: 0px;
                                font-size: 14px;
                                font-weight:normal;
                                width: 100%;
                                margin-top: 25px;
                                margin-bottom:10px ;
                                text-align: center;
                            }
                            .enquriyFormTitle{
                                margin-left: 0px;
                                font-size: 14px;
                                text-align: center;
                                font-weight:normal;
                                padding-bottom: 20px
                            }
                            .enquiryProHr{
                                display:none;
                            }
                            .mobileEnquriyHeader{
                                display: block;
                                text-align: center;
                                padding-top: 6px;
                            }
                            .mobileEnquirySpan{
                                padding-right: 16%
                            }
                            .EnquiryForm li:last-child{
                                padding-bottom: 25px;
                            }
                            .enquiryNoProText{
                                font-size: 14px;
                                color: #999999;
                                text-align: center;
                                padding-top: 30px
                            }
                            .enquiryNonePorduct{
                                display: none;
                                position:absolute;
                                top: 29%;
                                left: 50%;
                                transform:translate(-50%)
                            }
                        }
                    </style>
                    <script>
                        $(function(){
                            var enlargeAl = function (moduleId){
                                this.moduleId = moduleId
                                this.originModule = $('#module_' + moduleId)
                                this.originControls = $('.detail-dialog-control'+ moduleId)
                                this.originPluns = $('[data-pluns="detailDialog'+moduleId+'"]')
                                this.originContent = $('#ks-content-ks-component' + moduleId)
                                this.left_arrow = this.originContent.find(' .icon-xiangzuojiantou')
                                this.right_arrow = this.originContent.find(' .icon-xiangyoujiantou')
                                this.init()
                            }
                            var tmpl
                            enlargeAl.prototype = {
                                constructor:this,
                                init: function(){
                                    var that = this
                                    if(window.innerWidth >= 768){
                                        this.originContent.find('.J_Viewer-arrow').off().on('click',function(){
                                            if($(this).hasClass('icon-xiangyoujiantou')){
                                                that.slideNext()
                                            }else{
                                                that.slidePrev()
                                            }
                                        })
                                        this.originControls.off().on('click',' .inSwiper-slide',function(e){
                                            e.preventDefault;
                                            var _this = this;
                                            tmpl = $($('#tmpl-18480272').html()),
                                                top = $(window).scrollTop();
                                            $('body').css({
                                                'overflow-y':'hidden',
                                                'top':-top
                                            }).append(tmpl)
                                            tmpl.off().on('click',function(){
                                                that.originPluns.hide()
                                                tmpl.remove()
                                                $('body').css({'overflow-y':'auto','top':''})
                                                $(window).scrollTop(top)
                                            })
                                            that.originPluns.show(0, function() {
                                                that.slideTo($(_this).parents('.swiper-slide.active').index())
                                                that.originPluns.find('.tb-viewer-icon').off().on('click',function(){
                                                    that.originPluns.hide()
                                                    tmpl.remove()
                                                    $('body').css({'overflow-y':'auto','top':''})
                                                    $(window).scrollTop(top)
                                                })
                                            })
                                        })
                                        this.originPluns.find('.tb-viewer-thumb').hover(function(){
                                            that.addThumbActive($(this).index())
                                            that.slideTo($(this).index())
                                        })
                                        this.originModule.on('click',' .close-buycar-warnning',function(){
                                            $(this).hide()
                                            that.originModule.find('.introduce-warnning').removeClass('common-border-color')
                                            that.originModule.find('.tb-choice').hide()
                                        })
                                    }
                                },
                                addThumbActive: function(index){
                                    this.originPluns.find('.tb-viewer-thumb').eq(index).addClass('common-border-color').siblings().removeClass('common-border-color')
                                },
                                slideTo: function(index)
                                {
                                    this.originContent.find('.tb-viewer-contents').children().eq(index).addClass('tab-active').siblings().removeClass('tab-active')
                                    this.addThumbActive(index)
                                },
                                slideNext: function(){
                                    var originContent = this.originContent.find('.tab-pannel-item.tab-active').removeClass('tab-active')
                                    if(originContent.next().length >0){
                                        originContent.next().addClass('tab-active')
                                        this.addThumbActive(originContent.next().index())
                                    }else {
                                        this.slideTo(0)
                                        this.addThumbActive(0)
                                    }
                                },
                                slidePrev: function(){
                                    var originContent = this.originContent.find('.tab-pannel-item.tab-active').removeClass('tab-active')
                                    if(originContent.prev().length >0){
                                        originContent.prev().addClass('tab-active')
                                        this.addThumbActive(originContent.prev().index())
                                    }else {
                                        this.slideTo(this.originContent.find('.tab-pannel-item').length - 1)
                                        this.addThumbActive(this.originContent.find('.tab-pannel-item').length - 1)
                                    }
                                }
                            }
                            var enlargeAl = new enlargeAl('18480272');
                            $('.J_ViewerXunPan').off('enquiryclick18480272').on('click.enquiryclick18480272',function(){
                                var top = $(window).scrollTop();
                                $('body').css({'top':''})
                                $(window).scrollTop(top)
                                tmpl.remove()
                                $('#enquiryDailog18480272').show(0,function() {
                                    $('#showcallback18480272').data('enquiryCallBack') && $('#showcallback18480272').data('enquiryCallBack')("{{ $product->name }}","2511247","{{asset('upload')}}/{{ $product->thumb }}")
                                });
                                $("[data-pluns='detailDialog18480272']").hide();
                            });
                        })</script>
                    <script>
                        if('1' == '1' && '1' == '1'){
                            loadStyleSheet('../skinp/modules/ModuleProductDetailGiant/detailDialog.css');
                        }
                        $(window).load(function(){
                            if(!""){
                                $('[show-div="pro-evaluate"]').hide();
                            }
                        });
                        addScript('../skinp/modules/ModuleProductDetailGiant/details.js', function () {
                            $(function(){
                                details('18480272','101','','[]','[]','','1',"{{asset('upload')}}/{{ $product->thumb }}","{{ $product->name }}");
                                initProductDetailQrcode('扫描二维码');
                            });
                        });</script>
                </div>
            </div>
        </div>
        <div class="mmm  "  id="module_0"  >
            <div class="ModuleShare module_0 clearfix">
                <!-- 主体 -->
                <div class='BodyCenter BodyCenter0 clearfix'>
                    <style>.ModuleShareContainer{width:100%;z-index:99999;background:white}
                        .ModuleShareContainer .title{margin:0 auto;width:100%;display:block;padding:0.625rem 0;text-align:center;font-size:1rem;position:relative;box-shadow: 0px -3px 8px 0px #efefef;}
                        .ModuleShareContainer .close{font-size:1.25rem;position:absolute;display:inline-block;right:0.625rem;width:1.875rem;}
                        .ModuleShareContainer .shareitem{width:24%;display:inline-block;padding:0.5rem 0.2rem;text-align:center;cursor:pointer;}
                        .ModuleShareContainer .ShareIcon{position:fixed;z-index:99999;right:1rem;bottom:7rem;display:block;width:3.125rem;height:3.125rem;text-align:center;border-radius:3.125rem;background-color: #FF9500;opacity: 0.9;-webkit-opacity: 0.9; -moz-opacity: 0.9; filter:alpha(opacity=90);color:white;padding-top:0.313rem; border: 1px #FF952F solid;}
                        .ModuleShare .ShareIcon a{ color: #fff;font-size: 0.875rem;line-height: 1.25rem; display: block;}
                        .ShareTipsModal .jiantou{height:69px;width:100%;margin-top: 2%;position:relative;}
                        .ShareTipsModal .jiantou img{position:absolute;right:5%;}
                    </style>
                    <script src='http://cdn.img-sys.com/scripts/nativeShare/nativeShare.js'></script>
                    <div id='divShareIcon0' class="ShareIcon">
                        <a href="javascript:void(0)">分享
                            <br>产品
                        </a>
                    </div>
                    <div id='divShare0' class='ModuleShareContainer' style='display:none;position:fixed;bottom:0;z-index: 100000;'>
                        <div class="bdsharebuttonbox">
                            <div class='title' onclick="$('#divShare0').toggle(300)"><b>推荐给朋友</b>
                                <div class='close'>
                                    <i class="fa fa-close"></i>
                                </div>
                            </div>
                            <div class='shareitem' data-app="weixin" title="分享到微信">
                                <img data-cmd="weixin" src='../images/weixin.gif' width='40'>
                                <div>微信好友
                                </div>
                            </div>
                            <div class='shareitem' data-app="QQ" title="分享给QQ好友">
                                <img data-cmd="sqq" src='../images/qq.gif' width='40'>
                                <div>QQ好友
                                </div>
                            </div>
                            <div class='shareitem' data-app="QZone" title="分享到QQ空间">
                                <img data-cmd="qzone" src='../images/qzone.gif' width='40'>
                                <div>QQ空间
                                </div>
                            </div>
                            <div class='shareitem' data-app="sinaWeibo" title="分享到新浪微博">
                                <img data-cmd="tsina" src='../images/weibo.gif' width='40'>
                                <div>新浪微博
                                </div>
                            </div><!--
                            <div class='shareitem' title="分享到腾讯微博">
                              <img data-cmd="tqq" src='/images/shareicons/tcn.gif' width='40'>
                              <div>腾讯微博
                              </div>
                            </div>-->
                            <div class='shareitem' title="分享到朋友网">
                                <img data-cmd="tqf" src='../images/pengyou.gif' width='40'>
                                <div>腾讯朋友
                                </div>
                            </div>
                            <div class='shareitem' title="分享到人人网">
                                <img data-cmd="renren" src='../images/renren.gif' width='40'>
                                <div>人人网
                                </div>
                            </div>
                            <div class='shareitem' id='copyurl' title="复制分享网址">
                                <img src='../images/copy.gif' width='40'>
                                <div>复制网址
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='divShareA0' style='display:none;'>
                    </div>
                    <div id='divTipsModal0' style='display:none;z-index:999999' class="ShareTipsModal modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="jiantou">
                            <img src="../images/jiantou.png" >
                        </div>
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-body" style="-ms-word-break:break-all;word-break:break-all;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>window.WeiXinNotAutoShare = true;
                        var invite = null;
                        $.ajax({ url: "../index.php?c=GetUserInviteId", async: false, success: function (data) {
                                invite = data.trim();
                                //alert(invite);
                            }
                        });
                        if(!invite) invite = getCookie('WebUserID');
                        var addstr = "invite=" + invite;
                        var urls = window.location.href.toString().split('#');
                        if(urls.length >1) urls[1] = urls[1].replace(/invite\d+/gi,'');
                        var querystring = window.location.search;
                        if(querystring){ //过滤掉一些参数
                            querystring = querystring.replace('from=groupmessage','');
                            querystring = querystring.replace(/isappinstalled=\d+/gi,'');
                            querystring = querystring.replace(/wxal=\d+/gi,'');
                            querystring = querystring.replace(/invite=\d+/gi,'');
                            querystring = querystring.replace(/&+/gi,'&');
                            querystring = querystring.replace(/&+$/gi,'');
                            querystring = querystring.replace(/^(\?)/gi,'');
                        }
                        if(querystring.indexOf("?") == -1) querystring = "?" + querystring;
                        querystring += "&" + addstr;
                        //querystring += "&wxal=1";
                        var shareurl  = "";
                        if(!shareurl) shareurl = "http://" + window.location.host + window.location.pathname + querystring + window.location.hash;
                        shareurl = shareurl.replace(/(\?&)/gi,'?');
                        if(shareurl.indexOf("invite=") >-1 && shareurl.indexOf("#invite") >-1) shareurl = shareurl.replace(/#invite\d+/gi,"");
                        //alert(shareurl);
                        var urlhash = window.location.hash;
                        urlhash = urlhash.replace(/#invite\d+/gi,"");
                        urlhash = urlhash.replace(/#wxal=1/gi,"");
                        if(invite && typeof ENABLE_FENXIAO != "undefined" && ENABLE_FENXIAO == "1") urlhash += "#invite" + invite;
                        //urlhash += "#wxal=1";
                        window.location.hash = urlhash;

                        $(".ModuleShare").appendTo($("body"));
                        $("#copyurl").click(function(){
                            $("#divTipsModal0 .jiantou").hide(1);
                            $("#divTipsModal0").modal();
                            $("#divTipsModal0 .modal-body").html("您的分享链接为：<br /><span style='color:#ff0000;'>"+shareurl+"</span><br />（长按链接可复制）");
                        });
                        if(!window._bd_share_config){
                            window._bd_share_config = {
                                common : {
                                    bdText : document.title,
                                    //bdDesc : '自定义分享摘要',
                                    //bdPic : '自定义分享图片',
                                    bdMiniList: false,
                                    bdUrl : shareurl
                                },
                                share: [{
                                    "bdSize": 16
                                }]//,
                                // selectShare: [{
                                // 	"bdselectMiniList": ['qzone', 'tqq', 'kaixin001', 'bdxc', 'tqf']
                                // }]
                            }
                        }else{
                            window._bd_share_config.common.bdText = document.title;
                            window._bd_share_config.common.bdUrl = shareurl;
                        }
                        with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='../static/api/js/share.js?cdnversion='+~(-new Date()/36e5)]; //这个脚本必须在初始化了 _bd_share_config 之后加载
                        var share_config = {
                            url:shareurl,
                            title:document.title,
                        };
                        var share_obj = new nativeShare('divShareA0',share_config);
                        if(share_obj.isUC()){
                            $("#divShareIcon0").click(function(){
                                share_obj.share('');
                            });
                        }else if(share_obj.isQQ()){
                            $("#divShareIcon0").click(function(){
                                $('#divShare0').toggle(300,function(){
                                    $('#divShare0 .shareitem').click(function(){
                                        var item = $(this);
                                        if(item.attr('data-app')){
                                            share_obj.share(item.attr('data-app'));
                                            $('#divShare0').toggle(300);
                                            return false;
                                        }
                                    });
                                });
                            });
                        }else if(share_obj.is_weixin()){
                            with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='https://res.wx.qq.com/open/js/jweixin-1.0.0.js?version='+~(-new Date()/36e5)];
                            if (typeof(WeiXinShare) == 'undefined') {
                                addScript('/scripts/party/weixinshare.js?v=11111', function () {
                                    wxShare();
                                });
                            }else{
                                wxShare();
                            }
                        }else{
                            $("#divShareIcon0").click(function(){
                                $('#divShare0').toggle(300,function(){

                                });
                            });
                        }

                        function wxShare() {
                            var urlhash = window.location.hash;
                            urlhash = urlhash.replace(/#invite\d+/gi, "");
                            urlhash = urlhash.replace(/#wxal=1/gi, "");
                            if (invite) urlhash += "#invite" + invite;
                            window.location.hash = urlhash;
                            $("#divTipsModal0").appendTo($('body'));
                            $("#divShareIcon0").click(function () {
                                $("#divTipsModal0 .jiantou").show(1);
                                $("#divTipsModal0").modal();
                                $("#divTipsModal0 .modal-body").html("您的分享链接为：<br /><span style='color:#ff0000;'>" + shareurl + "</span><br />（长按链接可复制）");
                            });

                            window.wxshareimg = 'http://r472-mdemo.yz168.cc/comdata/997/product/20181228093919DB5FDFEF76D44CD6_s.png' ? 'http://r472-mdemo.yz168.cc/comdata/997/product/20181228093919DB5FDFEF76D44CD6_s.png?cdn=0' : '';
                            var sharejson = {
                                title: document.title, // 分享标题
                                desc: $('meta[name="description"]').attr("content") || $('meta[name="keywords"]').attr("content"), // 分享描述
                                link: shareurl.split('#')[0], //分享链接
                                imgUrl: window.wxshareimg ? window.wxshareimg : window.wxshareimgExp
                            };
                            WeiXinShare(sharejson);
                        }</script>
                </div>
            </div>
        </div>
        <script id='FF89F1B5EEB880F34D13784BD343E0F7'>computeZoneHeight($('#FF89F1B5EEB880F34D13784BD343E0F7').parent());</script>
    </div>
@endsection