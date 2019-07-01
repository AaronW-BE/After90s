@extends('layouts.frontend')
@section('styles')
    <link rel="stylesheet" href="{{asset('frontend/css/schedule-detail.css')}}">
@endsection

@section('title')
    线路详情 | {{$schedule->title}}
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
                <div class="title">{{$schedule->title}}</div>
                <div class="label-wrap">
                    @foreach($schedule->tags as $tag)
                        <span class="label">{{$tag}}</span>
                    @endforeach
                </div>
                <div class="tips">
                    团建收益：<br>
                    {{$schedule->benefits}}
                </div>
                <div class="info-wrap">
                    <span>{{$schedule->location}}</span>
                    <span>{{$schedule->duration}}</span>
                    <span>{{$schedule->people_count}}人</span>
                </div>

                <div class="amount-wrap">
                    <div class="price-wrap">
                        ￥<span class="price">600</span> /人起
                    </div>
                    <div class="order-btn-wrap" data-toggle="modal" data-target="#scheduleApply">
                        <span class="order-btn">免费定制</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="clearfix"></div>
        <div class="section-title">方案详情</div>
        <div class="schedule-desc-wrap">
            {{$schedule->description}}
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="scheduleApply" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">填写预定信息 - {{$schedule->title}}</h5>
                </div>
                <div class="modal-body">
                    <div class="customize-item">
                        <p>请准确填写预定信息，以便我们及时联系您</p>
                    </div>
                    <div class="form-group">
                        <label for="date">出发日期</label>
                        <input type="date" required id="date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="people_count">出发人数</label>
                        <input type="number" id="people_count" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">姓名</label>
                        <input type="text" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">手机号码</label>
                        <input type="number" id="phone" class="form-control" placeholder="请输入您的手机号"></div>
                    <div class="form-group">
                        <label for="remarks">备注</label>
                        <textarea id="remarks" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-apply">定制团建方案</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()

@section('scripts')
    <script>
        $(function () {
            $('.btn-apply').on('click', function () {
                let schedule_id = "{{$schedule->id}}";
                let date = $('#date').val();
                let people_count = $('#people_count').val();
                let name = $('#name').val();
                let phone = $('#phone').val();
                let remarks = $('#remarks').val();

                if (!name) {
                    alert('请输入姓名');
                    return
                }
                if (!date) {
                    alert('请选择出发日期');
                    return;
                }

                if (!people_count) {
                    alert('请选择人数');
                    return;
                }

                if (!phone) {
                    alert('请输入手机号');
                    return;
                }

                $.post('{{route('schedule.apply')}}', {
                    schedule_id,
                    date,
                    people_count,
                    name,
                    phone,
                    remarks
                }, function (res) {
                    if (res.code === 200) {
                        alert('预定成功,我们将在两日内与您取得联系');
                        window.location.reload();
                    } else {
                        alert('出错啦，请稍后再试');
                        window.location.reload();
                    }
                });
            });
        });
    </script>
@endsection
