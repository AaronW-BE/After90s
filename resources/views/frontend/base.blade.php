@extends('layouts.frontend')

@section('title')
    基地探索
@endsection

@section('banner')
    @component('component.banner', ['list' => $banners])
    @endcomponent
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('frontend/css/team-video.css')}}">
@endsection

@section('content')
    <div class="category-wrap">
        <div class="category-item active">全部</div>
        <div class="category-item">杭州市内</div>
        <div class="category-item">杭州周边</div>
        <div class="category-item">省外</div>
        <div class="category-item">其他</div>
        <div class="category-item">其他</div>
        <div class="category-item">其他</div>
        <div class="category-item">其他</div>
        <div class="category-item">其他</div>
        <div class="category-item">其他</div>
        <div class="category-item">其他</div>
        <div class="category-item">其他</div>
        <div class="clearfix"></div>
    </div>
    <div class="basement-blocks-wrap">
        <div class="row">
            <div class="col-4">
                <div class="basement-card">
                    <div class="cover">
                        <a href="./basementDetail.html">
                            <img src="../img/index/banner.jpg" alt="">
                        </a>
                    </div>
                    <div class="title">杭州乐园</div>
                    <div class="desc">
                        <span>杭州乐园快来玩</span>
                    </div>
                    <div class="specialize">
                        特色项目:<span class="item">过山车</span>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="basement-card">
                    <div class="cover">
                        <img src="../img/index/banner.jpg" alt="">
                    </div>
                    <div class="title">杭州乐园</div>
                    <div class="desc">
                        <span>杭州乐园快来玩</span>
                    </div>
                    <div class="specialize">
                        特色项目:<span class="item">过山车</span>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="basement-card">
                    <div class="cover">
                        <img src="../img/index/banner.jpg" alt="">
                    </div>
                    <div class="title">杭州乐园</div>
                    <div class="desc">
                        <span>杭州乐园快来玩</span>
                    </div>
                    <div class="specialize">
                        特色项目:<span class="item">过山车</span>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="basement-card">
                    <div class="cover">
                        <img src="../img/index/banner.jpg" alt="">
                    </div>
                    <div class="title">杭州乐园</div>
                    <div class="desc">
                        <span>杭州乐园快来玩</span>
                    </div>
                    <div class="specialize">
                        特色项目:<span class="item">过山车</span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="basement-card">
                    <div class="cover">
                        <img src="../img/index/banner.jpg" alt="">
                    </div>
                    <div class="title">杭州乐园</div>
                    <div class="desc">
                        <span>杭州乐园快来玩</span>
                    </div>
                    <div class="specialize">
                        特色项目:<span class="item">过山车</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection