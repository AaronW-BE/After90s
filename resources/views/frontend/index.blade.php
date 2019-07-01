@extends('layouts.frontend')

@section('styles')
    <link rel="stylesheet" href="{{asset('frontend/css/index.css')}}">
@endsection

@section('banner')
    @component('component.banner', ['list' => $banners])
    @endcomponent
@endsection

@section('content')

    <!--    // 热门推荐-->
    {{--    <div class="section-title">优选特惠</div>--}}
    {{--    <div class="hot-recommend-container">--}}
    {{--        <div class="item-card introduction-wrap">--}}
    {{--            <a href="./schedule-detail.html">--}}
    {{--                <div class="cover big-img">--}}
    {{--                    <img class="lazy" data-original="../img/index/1.jpeg" alt="">--}}
    {{--                </div>--}}
    {{--                <div class="caption introduction">--}}
    {{--                    <div class="introduction-left">--}}
    {{--                        <div style="overflow: hidden">--}}
    {{--                            <div class="introduction-left-title">丽江+双古城+玉龙雪山+蓝月谷+丽江+双古城+玉龙雪山+蓝月谷</div>--}}
    {{--                            <div class="introduction-left-desc">国内游.杭州出发</div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="introduction-right">--}}
    {{--                        <div style="overflow: hidden; height: 3rem; font-size: 1rem; line-height: 3rem">--}}
    {{--                            <span>￥<span style="font-size: 1.5rem">3162</span>起</span>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="item-card ">--}}
    {{--            <a href="./schedule-detail.html">--}}
    {{--                <div class="cover">--}}
    {{--                    <img class="lazy" data-original="../img/index/2.jpg" alt="">--}}
    {{--                    <div class="price">299起</div>--}}
    {{--                </div>--}}
    {{--                <div class="item-card-footer">--}}
    {{--                    <div class="caption">普吉岛6日或7日半自助游</div>--}}
    {{--                    <div class="desc">杭州出发</div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="item-card ">--}}
    {{--            <a href="#">--}}
    {{--                <div class="cover">--}}
    {{--                    <img class="lazy" data-original="../img/index/3.jpg" alt="">--}}
    {{--                    <div class="price">299起</div>--}}
    {{--                </div>--}}
    {{--                <div class="item-card-footer">--}}
    {{--                    <div class="caption">普吉岛6日或7日半自助游</div>--}}
    {{--                    <div class="desc">杭州出发</div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="item-card ">--}}
    {{--            <a href="#">--}}
    {{--                <div class="cover">--}}
    {{--                    <img class="lazy" data-original="../img/index/images%20(1).jpg" alt="">--}}
    {{--                    <div class="price">299起</div>--}}
    {{--                </div>--}}
    {{--                <div class="item-card-footer">--}}
    {{--                    <div class="caption">普吉岛6日或7日半自助游</div>--}}
    {{--                    <div class="desc">杭州出发</div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="item-card ">--}}
    {{--            <a href="#">--}}
    {{--                <div class="cover">--}}
    {{--                    <img class="lazy" data-original="../img/index/images.jpg" alt="">--}}
    {{--                    <div class="price">299起</div>--}}
    {{--                </div>--}}
    {{--                <div class="item-card-footer">--}}
    {{--                    <div class="caption">普吉岛6日或7日半自助游</div>--}}
    {{--                    <div class="desc">杭州出发</div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="item-card ">--}}
    {{--            <a href="#">--}}
    {{--                <div class="cover">--}}
    {{--                    <img class="lazy" data-original="../img/index/images%20(2).jpg" alt="">--}}
    {{--                    <div class="price">299起</div>--}}
    {{--                </div>--}}
    {{--                <div class="item-card-footer">--}}
    {{--                    <div class="caption">普吉岛6日或7日半自助游</div>--}}
    {{--                    <div class="desc">杭州出发</div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="item-card ">--}}
    {{--            <a href="#">--}}
    {{--                <div class="cover">--}}
    {{--                    <img class="lazy" data-original="../img/index/banner.jpg" alt="">--}}
    {{--                    <div class="price">299起</div>--}}
    {{--                </div>--}}
    {{--                <div class="item-card-footer">--}}
    {{--                    <div class="caption">普吉岛6日或7日半自助游</div>--}}
    {{--                    <div class="desc">杭州出发</div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="item-card ">--}}
    {{--            <a href="#">--}}
    {{--                <div class="cover">--}}
    {{--                    <img class="lazy" data-original="../img/index/1.jpeg" alt="">--}}
    {{--                    <div class="price">299起</div>--}}
    {{--                </div>--}}
    {{--                <div class="item-card-footer">--}}
    {{--                    <div class="caption">普吉岛6日或7日半自助游</div>--}}
    {{--                    <div class="desc">杭州出发</div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="item-card ">--}}
    {{--            <a href="#">--}}
    {{--                <div class="cover">--}}
    {{--                    <img class="lazy" data-original="../img/index/2.jpg" alt="">--}}
    {{--                    <div class="price">299起</div>--}}
    {{--                </div>--}}
    {{--                <div class="item-card-footer">--}}
    {{--                    <div class="caption">普吉岛6日或7日半自助游</div>--}}
    {{--                    <div class="desc">杭州出发</div>--}}
    {{--                </div>--}}
    {{--            </a>--}}
    {{--        </div>--}}
    {{--        <div class="clearfix"></div>--}}
    {{--    </div>--}}

    <!--    // 分类列表-->
    <div class="case-category-container">
        @foreach($cateWithSchedule as $cate)
            <div class="category-wrap">
                <div class="section-title">{{$cate->name}}</div>
                <div class="list">
                    @foreach($cate->schedules as $schedule)
                        <div class="list-item schedule-detail-btn" data-schedule_id="{{$schedule->id}}">
                            <div class="cover">
                                <img class="lazy" data-original="{{$schedule->cover}}" alt="">
                            </div>
                            <div class="item-footer">
                                <div class="title">{{$schedule->title}}</div>
                                <div class="desc">
                                    <div class="desc-time">
                                        <img src="{{asset('frontend/img/icon/dress.svg')}}" alt="" width="20" height="20">浙江<span
                                                class="desc-time-margin">|</span><img src="{{asset('frontend/img/icon/time.svg')}}" alt=""
                                                                                      width="20"
                                                                                      height="20">{{$schedule->duration}}
                                    </div>
                                    <div class="desc-price">
                                        ￥ <span style="font-size: 1.5rem">{{$schedule->price}}</span>/人起
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="category-wrap">
            <div class="section-title">基地探索</div>
            <div class="list">
                <div class="list-item">
                    <div class="cover-bg">
                        <div class="cover-bg-img">
                            <img src="{{asset('frontend/img/index/images%20(1).jpg')}}" alt="">
                        </div>
                        <div class="cover-bg-shadow">
                            <img src="{{asset('frontend/img/icon/on.svg')}}" alt="">
                        </div>
                        <span class="cover-bg-playback">播放：3562</span>
                    </div>
                    <div class="cover-bg-font">
                        <span>藏西秘境 去浪阿里</span>
                    </div>
                </div>
                <div class="list-item">
                    <div class="cover-bg">
                        <div class="cover-bg-img">
                            <img src="{{asset('frontend/img/index/images%20(1).jpg')}}" alt="">
                        </div>
                        <div class="cover-bg-shadow">
                            <img src="{{asset('frontend/img/icon/on.svg')}}" alt="">
                        </div>
                        <span class="cover-bg-playback">播放：3562</span>
                    </div>
                    <div class="cover-bg-font">
                        <span>藏西秘境 去浪阿里</span>
                    </div>
                </div>
                <div class="list-item">
                    <div class="cover-bg">
                        <div class="cover-bg-img">
                            <img src="{{asset('frontend/img/index/images%20(1).jpg')}}" alt="">
                        </div>
                        <div class="cover-bg-shadow">
                            <img src="{{asset('frontend/img/icon/on.svg')}}" alt="">
                        </div>
                        <span class="cover-bg-playback">播放：3562</span>
                    </div>
                    <div class="cover-bg-font">
                        <span>藏西秘境 去浪阿里</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    // 轮播-->
    <div class="swiper-container">
        <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner-img">
                        <img class="d-block w-100 " src="{{asset('frontend/img/index/1.jpeg')}}" alt="First slide">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-img">
                        <img class="d-block w-100 " src="{{asset('frontend/img/index/2.jpg')}}" alt="Second slide">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-img">
                        <img class="d-block w-100 " src="{{asset('frontend/img/index/2.jpg')}}" alt="Third slide">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--    选择我们的理由-->
    <div>
        <div class="section-title">选择我们的理由</div>
        <div class="reason-wrap">
            <div class="reason-item">
                <div class="icon">
                    <img class="lazy" data-original="{{asset('frontend/img/icon/svg%20(4).svg')}}" alt="">
                </div>
                <div>
                    轻松
                </div>
                <div>
                    relax
                </div>
                <div>
                    只需提交团建需求
                </div>
                <div>
                    团建管家一对一全程服务
                </div>
            </div>
            <div class="reason-item">
                <div class="icon">
                    <img class="lazy" data-original="{{asset('frontend/img/icon/svg%20(3).svg')}}" alt="">
                </div>
                <div>
                    轻松
                </div>
                <div>
                    relax
                </div>
                <div>
                    只需提交团建需求
                </div>
                <div>
                    团建管家一对一全程服务
                </div>
            </div>
            <div class="reason-item">
                <div class="icon">
                    <img class="lazy" data-original="{{asset('frontend/img/icon/svg%20(2).svg')}}" alt="">
                </div>
                <div>
                    轻松
                </div>
                <div>
                    relax
                </div>
                <div>
                    只需提交团建需求
                </div>
                <div>
                    团建管家一对一全程服务
                </div>
            </div>
            <div class="reason-item">
                <div class="icon">
                    <img class="lazy" data-original="{{asset('frontend/img/icon/svg%20(1).svg')}}" alt="">
                </div>
                <div>
                    轻松
                </div>
                <div>
                    relax
                </div>
                <div>
                    只需提交团建需求
                </div>
                <div>
                    团建管家一对一全程服务
                </div>
            </div>
        </div>
    </div>
    <!--    合作-->
    <div>
        @if(count($partners))
            <div class="section-title">合作伙伴</div>
            <div class="corp-wrap">
                @foreach($partners as $partner)
                    <div class="corp-item">
                        <img class="lazy" data-original="{{$partner->logo ?? ''}}" alt="">
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
