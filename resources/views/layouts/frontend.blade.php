<!doctype html>
<html lang="zh">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('frontend/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/lib/bootstrap-4.3.1/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/lib/bootstrap-4.3.1/css/bootstrap-reboot.css')}}">

</head>
<body>
@include('partial.nav')

@yield('banner')

<div class="container bg-img">
    @yield('content')
</div>

@include('partial.footer')

<script src="{{asset('frontend/lib/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('frontend/lib/lazyload/jquery.lazyload.js')}}"></script>
<script src="{{asset('frontend/lib/bootstrap-4.3.1/js/bootstrap.js')}}"></script>
<script src="{{asset('frontend/js/common.js')}}"></script>
<script src="{{asset('frontend/js/common.js')}}"></script>
</body>
</html>