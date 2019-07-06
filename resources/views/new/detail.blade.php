@extends('layouts.app')

@section('title','新闻中心')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('static/css/newDetail.css') }}"/>
@endsection
@section('content')
    <div>
        <div class="ModuleItem  StaticModule mhidden-xs" wo="367" id="module_18512753"  >
            <div class="ModuleImageGiant layout-101 layout-color- module_18512753 clearfix">
                <!-- 主体 -->
                <div class='BodyCenter BodyCenter18512753 clearfix'>
                    <img class="image-animation" src="http://cdn.img-sys.com/comdata/997/201812/20181229163247f509a3.png" url="/comdata/997/201812/20181229163247f509a3.png" alt="图片展示" />
                </div>
            </div>
        </div>
        <div class="ModuleItem  "  id="module_18515551"  >
            <div class="ModuleNewsDetailGiant layout-101 layout-color- module_18515551 clearfix">
                <!-- 主体 -->
                <div class='BodyCenter BodyCenter18515551 clearfix'>
                    <div class="news-details-item">
                        <input type="hidden" class="ArticleID" value="887677" /><h2 class="newsDetailTitle">{{ $journalism->title }}</h2>
                        <div class="newsSource"><span>views：{{ $journalism->views_count }}</span><span>Publication time：{{ $journalism->updated_at }}</span>
                        </div>
                        <section  id="readMore" >
                            <article style="padding:10px" id="contentNewW887677">
                                {!! $journalism->content !!}
                            </article>
                        </section>
                        <!--标签-->
                        <div class="PrevNext"><span class="prev">
                            @if($pre_new)
                                <a href="/newDetail/{{$pre_new->id}}">Last article&nbsp;:&nbsp;{{ $pre_new->title }}</a></span><span class="next">
                            @endif
                            @if($next_new)
                                <a href="/newDetail/{{$next_new->id}}">Next article&nbsp;:&nbsp;{{ $next_new->title }}</a></span>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection