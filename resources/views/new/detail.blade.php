@extends('layouts.app')

@section('title','新闻中心')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/newDetail.css') }}"/>
@endsection
@section('content')
    <div>
        <div class="ModuleItem  "  id="module_18515551"  >
            <div class="ModuleNewsDetailGiant layout-101 layout-color- module_18515551 clearfix">
                <!-- 主体 -->
                <div class='BodyCenter BodyCenter18515551 clearfix'>
                    <div class="news-details-item">
                        <input type="hidden" class="ArticleID" value="887677" /><h2 class="newsDetailTitle">【十一限时特惠】感恩公司25周年，买门窗送金币！</h2>
                        <div class="newsSource"><span>关注：21</span><span>发表时间：2018-12-28 17:57:27</span>
                        </div>
                        <section  id="readMore" >
                            <article style="padding:10px" id="contentNewW887677">
                                <p><span style="color: rgb(89, 89, 89); font-size: 16px;"><strong>今年某某门窗实业有限公司就25周岁啦！感恩前行，感谢有你，在国庆佳节到来之际，华兴节能门窗特举办购窗送金币活动，来回馈各位新老客户多年来的深情厚爱。</strong></span>
                                </p>
                                <p><br/>
                                </p>
                                <p>
                                    <img src="../static/img/20181228174727a1af67.jpg"/>
                                </p>
                                <p><br/>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);">历经风雨磨砺，跟随时代变迁，逐渐成为了门窗行业的领军角色。多年来华兴始终将品质放在第一位，其生产的铝包木门窗产品，以先进的生产设备、卓越的研发技术、精湛的生产工艺，完美代表了业界节能门窗制造的最高水准。</span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);"><br/></span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);">大浪淘沙，方显英雄本色。公司作为中国节能门窗十强品牌，之所以能在25年的市场变迁中屹立不倒，与其对选材的高标准、严要求不无关系。华兴铝包木门窗，选用进口木材，德国进口多锁点防盗五金系统，德国环保专用门窗漆，双层、三层中空玻璃，另有欧洲顶尖技术工艺的加持，窗体实现四道密封，因而保证了其优异的性能及突出的节能表现。</span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);"><br/></span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);"></span>
                                </p>
                                <p><strong><span style="color: rgb(89, 89, 89);">活动时间：</span></strong><span style="color: rgb(127, 127, 127);">2018.10.1—10.15</span>
                                </p>
                                <p><strong><span style="color: rgb(89, 89, 89);">活动对象：</span></strong><span style="color: rgb(127, 127, 127);">所有终端客户</span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);">&nbsp;</span>
                                </p>
                                <p><span style="color: rgb(89, 89, 89);"><strong>活动方式：</strong></span><span style="color: rgb(127, 127, 127);">只要您在活动期间（2018.10.1—10.15）日内，凡购买华兴节能门窗旗下任意系列产品，就能获得“华兴25周年”纪念金币啦！</span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);">&nbsp;</span>
                                </p>
                                <p><span style="color: rgb(89, 89, 89);"><strong>活动详情:</strong></span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);">1.活动有效订单仅限于活动时间内购买华兴门窗的终端客户，每单送一枚金币；</span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);">2. 活动奖品将按客户登记信息直接发放至客户手中，为保证金币的顺利发放，请认真填写登记信息。</span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);">3.金币预计在活动结束后50个工作日内陆续发放，发放顺序以下单的先后顺序为准；</span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);">4.本次活动最终解释权归哈尔滨华兴节能门窗股份有限公司所有。</span>
                                </p>
                                <p><span style="color: rgb(127, 127, 127);"><br/></span><br/>
                                </p>
                            </article>
                        </section>
                        <!--标签-->
                        <div class="PrevNext"><span class="prev">
                    <a href="/NewsDetail/888442.html">上一篇&nbsp;:&nbsp;喜报」某某门窗成功通过《绿色建筑选用产品》认证</a></span><span class="next">
                    <a href="/NewsDetail/887674.html">下一篇&nbsp;:&nbsp;节能门窗2018岗位技能竞技大赛圆满落幕！</a></span>
                        </div>
                    </div>
                    <script src="http://cdn.img-sys.com/skinp/common/mobile/js/readmore.js"></script>
                    <script>$(function() {
                            if (window.location.getQueryString('newsView') == '1') {
                                $('#contentNewW887677').html(decodeURIComponent($('#contentNewW887677').html()))
                            }
                            // 先隐藏分享模块，目前只通过他来调分享的接口
                            $(".ModuleShare .ModuleHead").css("display","none");
                        })
                        loadCommentList();
                        function loadCommentList(){
                            $('.news-comment').load("../index.php?c=front/NewsComment&a=showpc&ArticleID=887677");
                            $('.newsmobile-comment').load("../index.php?c=front/NewsComment&a=showmobile&ArticleID=887677&ShowMsgIcon=1");
                        }
                        //END OF 加载评论相关

                        $('.NewsContent img:eq(0)').clone().hide().prependTo('body');
                        changeFontSize($('#module_18515551'));

                        loadStyleSheet('../scripts/wookmark/css/lightgallery.min.css');
                        addScript('../scripts/wookmark/lightgallery.min.js',function(){
                            addScript('../scripts/wookmark/lg-fullscreen.min.js');
                            addScript('../scripts/wookmark/lg-thumbnail.min.js');
                            addScript('../scripts/wookmark/lg-zoom.min.js');
                            addScript('../skinp/common/mobile/js/zepto.min.js');


                            $('.NewsContent img').off('click').on('click', function(){
                                var list = [];
                                $('.NewsContent img').each(function(){
                                    var obj = {
                                        src: $(this).prop('src'),
                                        thumb: $(this).prop('src'),
                                        subHtml: $(this).prop('alt')
                                    };
                                    list.push(obj);
                                });
                                $(this).lightGallery({
                                    index: $(this).index('.NewsContent img'),
                                    dynamic: true,
                                    thumbnail: true,
                                    dynamicEl: list
                                });
                            });

                        });

                        //pc的分享
                        $('.share-news-pc').find('.shareitem').off('click').on('click',function(){
                            var thisshare = $(this).attr('data-cmd');
                            $('.bdsharebuttonbox img[data-cmd='+thisshare+']').click();
                        })
                        //移动的分享
                        $('.share-news-mobile').click(function(){
                            $('.ShareIcon').click();
                        })

                        //禁止转载功能


                        /*
                                $(".share-news-pc").addClass('bdsharebuttonbox').append(
                                    '<div class="shareitem" title="分享到腾讯微博">'+
                                    '<img data-cmd="tqq" src="/images/NewsDetail/tengxun.jpg" width="40">'+
                                    '</div>'+

                                    '<div class="shareitem" data-app="QZone" title="分享到QQ空间">'+
                                    '<img data-cmd="qzone" src="/images/NewsDetail/qzone.jpg" width="40">'+
                                    '</div>'+

                                    '<div class="shareitem" data-app="QQ" >'+
                                    '<img data-cmd="sqq" src="/images/NewsDetail/QQ.jpg" width="40">'+
                                    '</div>'+

                                    '<div class="shareitem" data-app="sinaWeibo" title="分享到新浪微博">'+
                                    '<img data-cmd="tsina" src="/images/NewsDetail/weibo.jpg" width="40">'+
                                    '</div>'+

                                    '<div class="shareitem" data-app="weixin" title="分享到微信">'+
                                    '<img data-cmd="weixin" src="/images/NewsDetail/wechat.jpg" width="40">'+
                                    '</div>'
                                );
                                $(".share-news-mobile").addClass('bdsharebuttonbox').append(
                                    '<div class="shareitem" title="分享到腾讯微博">'+
                                    '<img src="/images/NewsDetail/tengxun.jpg" width="40">'+
                                    '</div>'+

                                    '<div class="shareitem" data-app="QZone" title="分享到QQ空间">'+
                                    '<img  src="/images/NewsDetail/qzone.jpg" width="40">'+
                                    '</div>'+

                                    '<div class="shareitem" data-app="QQ" >'+
                                    '<img src="/images/NewsDetail/QQ.jpg" width="40">'+
                                    '</div>'+

                                    '<div class="shareitem" data-app="sinaWeibo" title="分享到新浪微博">'+
                                    '<img src="/images/NewsDetail/weibo.jpg" width="40">'+
                                    '</div>'+

                                    '<div class="shareitem" data-app="weixin" title="分享到微信">'+
                                    '<img src="/images/NewsDetail/wechat.jpg" width="40">'+
                                    '</div>'
                                );
                        */

                        //文章折叠</script>
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
                            <br>文章
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

                            window.wxshareimg = 'http://r472-mdemo.yz168.cc/comdata/997/201812/201812281520284f4c8e.png' ? 'http://r472-mdemo.yz168.cc/comdata/997/201812/201812281520284f4c8e.png?cdn=0' : '';
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
        <script id='FF61BCF7896AA6733B46053D5ED3E837'>computeZoneHeight($('#FF61BCF7896AA6733B46053D5ED3E837').parent());</script>
    </div>

@endsection