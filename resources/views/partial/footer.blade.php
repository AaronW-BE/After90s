<div class="footer-container">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="links-wrap">
                    <a href="{{route('base.list')}}">基地探索</a>
                    <a href="{{route('schedule.list')}}">线路查询</a>
{{--                    <a href="#">服务跳转</a>--}}
{{--                    <a href="#">加入我们</a>--}}
                </div>

                <div class="contact-wrap">
                    <div>定制热线：0571-85183825</div>
                    <div style="font-size: 1.2rem">线路咨询：15700063645 (90后阿秉)，18966487994 (90后阿邦)</div>
                </div>

                <div class="site-info-wrap">
                    <span class="copyright">Copyright {{date('Y')}} 杭州秉诚户外运动策划有限公司. All Rights Reserved</span>
                    <span class="record"> 浙ICP备19026214号-1 </span>
                </div>
            </div>
            <div class="col-md">
                <div class="qrcode-wrap">
                    <img style="width: 100%;" src="{{asset('frontend/img/qrcode.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function () {
        $('.schedule-detail-btn').on('click', function () {
            let targetId = $(this).attr('data-schedule_id');
            console.log(targetId);
            if (targetId) {
                let url = `{{route('schedule.detail', '_s_id_')}}`.replace('_s_id_', targetId);
                console.log(url);
                window.location.href = url;
            }
        });

        $('.base-detail-btn').on('click', function () {
            let targetId = $(this).attr('data-base_id');
            if (targetId) {
                let url = `{{route('base.detail', '_s_id_')}}`.replace('_s_id_', targetId);
                console.log(url);
                window.location.href = url;
            }
        });


    }
</script>