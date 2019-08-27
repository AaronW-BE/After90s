
{{--navbar--}}
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{asset('frontend/img/logo.png')}}" height="60" alt="">
            <!--            秉诚户外-->
        </a>
        <!--    /汉堡按钮-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{url()->current() == route('index') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('index')}}">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{url()->current() == route('schedule.list') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('schedule.list')}}">行程方案</a>
                </li>
                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" href="#">企业案例</a>-->
                <!--                </li>-->
                <li class="nav-item {{url()->current() == route('base.list') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('base.list')}}">基地探索</a>
                </li>
            </ul>

{{--            <form class="form-inline">--}}
{{--                <label>--}}
{{--                    <input class="form-control mr-sm-2" type="search" placeholder="请输入搜索行程关键字" />--}}
{{--                    <button class="btn btn-outline-success" type="submit">搜索</button>--}}
{{--                </label>--}}
{{--            </form>--}}
        </div>
    </div>

</nav>