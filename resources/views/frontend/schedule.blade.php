@extends('layouts.frontend')
@section('styles')
    <link rel="stylesheet" href="{{asset('frontend/css/schedule.css')}}">
@endsection

@section('banner')
    @component('component.banner', ['list' => $banners])
    @endcomponent
@endsection

@section('content')
    <div class="classification-wrap">
        <div>
            <div class="filter-type">团建类型</div>
            <ul class="classification" data-type="schedule">
                <li data-type_id="0">全部</li>
                @foreach($types as $type)
                    <li data-type_id="{{$type->id}}" class="">{{$type->name}}</li>
                @endforeach
            </ul>
            <div style="clear:both"></div>

        </div>
        <div>
            <div class="filter-type">时间周期</div>
            <ul class="classification" data-type="duration">
                <li data-type_id="0">全部</li>
                @foreach($durationTypes as $type)
                    <li data-type_id="{{$type}}" class="">{{$type}}</li>
                @endforeach
            </ul>
            <div style="clear:both"></div>
        </div>
        <div>
            <div class="filter-type">人均费用</div>
            <ul class="classification" data-type="fee">
                <li data-type_id="0">全部</li>
                @foreach($feeTypes as $type)
                    <li data-type_id="{{$type}}" class="">{{$type}}</li>
                @endforeach
            </ul>
            <div style="clear:both"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-8 schedule-wrap">
            <div class="schedule-list">
            </div>
            <!--            分页-->
            <div>

            </div>
        </div>
        <div class="col-3 side-section-wrap">
            <div class="form-wrap"></div>
            <div class="recommend-section-wrap">
                <div class="section-title">最新推荐</div>
                @foreach($topRecommend as $schedule)
                    <div class="recommend-schedule-card schedule-detail-btn" data-schedule_id="{{$schedule->id}}">
                        <div class="cover">
                            <img src="{{$schedule->cover}}" alt="{{$schedule->title}}">
                        </div>
                        <div class="title">
                            <span>{{$schedule->title}}</span>
                        </div>
                        <div class="tips">
                            <div class="desc-time">{{$schedule->duration}}</div>
                            <div class="price-wrap">￥<span>{{$schedule->price}}</span>/人起</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            let scheduleType = "0";
            let scheduleDuration = "0";
            let scheduleFee = "0";

            queryScheduleList(scheduleType, scheduleDuration, scheduleFee);


            $('.classification li').on('click', function (e) {
                let targetId = $(this).attr('data-type_id');

                let targetType = $(this).parent('ul').attr('data-type');
                console.log(targetType, targetId);

                $(this).addClass('active').siblings().removeClass('active')

                switch (targetType) {
                    case 'schedule':
                        scheduleType = targetId;
                        break;
                    case 'duration':
                        scheduleDuration = targetId;
                        break;
                    case 'fee':
                        scheduleFee = targetId;
                        break;
                }

                // load data
                queryScheduleList(scheduleType, scheduleDuration, scheduleFee);
            });
        });

        function queryScheduleList(scheduleType = 0, scheduleDuration = 0, scheduleFee = 0) {
            $.get('/api/schedule/query', {
                type: scheduleType,
                duration: scheduleDuration,
                fee: scheduleFee
            }, function (res) {
                if (res.code === 0) {
                    console.log('load success');
                    let data = res.data;

                    $('.schedule-list').empty();

                    data.forEach(function (item) {
                        console.log(item)
                        let template = `
                    <div class="schedule-item">
                    <div class="cover">
                        <img src="${item.cover}" alt="">
                    </div>
                    <div class="desc">
                        <div class="title">${item.title}</div>
                        <div class="summary">${item.title}</div>
                        <div class="tips">
                            <span>${item.location}</span>
                            <span>${item.duration}</span>
                            <span>${item.people_count}人</span>
                        </div>
                        <div class="info">
                            <div class="price-wrap">￥<span class="price">${item.price}</span>/人起</div>
                            <div class="btn-wrap">
                                <div class="btn schedule-detail-btn" data-schedule_id="${item.id}">查看方案</div>
                            </div>
                        </div>
                    </div>
                </div>
                    `;
                        $('.schedule-list').append(template)
                    })
                }
            });
        }
    </script>
@endsection
