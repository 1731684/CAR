<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-icons/icons/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/web/style.css') }}" rel="stylesheet" type="text/css">
    @yield('style')
</head>
<body>

<div class="navMenuBar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="float-left navMenuBarLogo">
                    <a href="{{ route('web.home') }}">
                        <img src="{{ asset('images/logo/logo.png') }}" class="appLogo">
                    </a>
                </div>
                {{--<div class="float-right navMenuBarMenuItems">--}}
                    {{--<ul class="list-unstyled list-inline m-0">--}}
                        {{--<li class="list-inline-item"><a href="#">Booking</a></li>--}}
                        {{--<li class="list-inline-item"><a href="#">Time schedule</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>

    <div ng-app="app" ng-cloak>
        <div class="container">
            @yield('content')
        </div>
    </div>

<script type="text/javascript" src="{{ asset('js/lib/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/lib/angular.min.js') }}"></script>
<script>
    var app = angular.module('app', []);
</script>
@yield('script')
</body>
</html>
