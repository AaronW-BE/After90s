@extends('layouts.frontend')
@section('styles')
    <link rel="stylesheet" href="{{asset('frontend/css/schedule-detail.css')}}">
@endsection


@section('content')
    <div class="breadcrumb-wrap">
        <a href="{{route('index')}}">首页</a>
        <span> > </span>
        <span>线路详情</span>
    </div>

    <div class="detail-wrap">
        <div class="pic-preview-wrap">
            <div class="img-preview">
                <img src="{{$schedule->cover}}" alt="">
            </div>
            <div class="img-list">
                @foreach($schedule->albums as $album)
                <div class="img"><img src="{{$album}}" alt=""></div>
                @endforeach
            </div>
        </div>
        <div class="schedule-detail-wrap">
            <div>
                <div class="title">【大青山浪漫海岛行】拥抱大海，戏水逐浪，尽情欢乐，2天1夜燃情团建之旅</div>
                <div class="label-wrap">
                    <span class="label">戏水逐浪</span>
                    <span class="label">戏水逐浪</span>
                    <span class="label">戏水逐浪</span>
                    <span class="label">戏水逐浪</span>
                </div>
                <div class="tips">
                    团建收益：<br>
                    ①使新员工新团队尽快拧成一股绳，发挥战斗力。<br>
                    ②生活化社交，增进了解，提高沟通和协作效率。<br>
                    ③轻松的旅行，恬静的海岛，调节紧张的工作状态。<br>
                    ④共同经历的美好的旅行体验，增进企业认同感。<br>
                </div>
                <div class="info-wrap">
                    <span>杭州-舟山</span>
                    <span>2天1夜</span>
                    <span>1-30人</span>
                </div>

                <div class="amount-wrap">
                    <div class="price-wrap">
                        ￥<span class="price">600</span> /人起
                    </div>
                    <div class="order-btn-wrap">
                        <span class="order-btn">免费定制</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="clearfix"></div>
        <div class="section-title">方案详情</div>
        <div class="schedule-desc-wrap">

        </div>
    </div>
@endsection()
