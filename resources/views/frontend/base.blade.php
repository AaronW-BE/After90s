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
        <div class="category-item active" data-type_id="0">全部</div>
        @foreach($baseTypes as $type)
            <div class="category-item" data-type_id="{{$type->id}}">{{$type->name}}</div>
        @endforeach
        <div class="clearfix"></div>
    </div>
    <div class="basement-blocks-wrap">
        <div class="row basement-item">

        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {

            loadData();

            $('.category-item').on('click', function () {
                $(this).addClass('active').siblings().removeClass('active');
                let typeId = $(this).attr('data-type_id');
                loadData(typeId)

            });

            function loadData(typeId = 0) {
                $.get('{{route('base.query')}}', {
                    type_id: typeId
                }, function (res) {
                    console.log(res)

                    if (res.code === 0) {
                        $('.basement-item').empty();
                        res.data.forEach(function (item) {
                            let tpl = `
                            <div class="col-4">
                                <div class="basement-card base-detail-btn" data-base_id="${item.id}">
                                    <div class="cover">
                                            <img src="${item.cover}" alt="">
                                    </div>
                                    <div class="title">${item.title}</div>
                                    <div class="desc">
                                        <span>${item.address}</span>
                                    </div>
                                    <div class="specialize">
                                        特色项目:<span class="item">${item.specials}</span>
                                    </div>
                                </div>
                            </div>`;
                            $('.basement-item').append(tpl);
                        })

                    }
                })
            }
        });
    </script>
@endsection