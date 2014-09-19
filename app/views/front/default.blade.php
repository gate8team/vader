<!DOCTYPE html>
<html lang="en" class=" ">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    @section('styles')
        {{ HTML::style('assets/css/bootstrap.css')}}
        {{ HTML::style('assets/css/animate.css')}}
        {{ HTML::style('assets/css/font-awesome.min.css')}}
        {{ HTML::style('assets/css/icon.css')}}
        {{ HTML::style('assets/css/font.css')}}
        {{ HTML::style('assets/css/app.css')}}
    @show

    @section('headerScripts')
        <!--[if lt IE 9]>
        {{ HTML::script('assets/js/ie/html5shiv.js')}}
        {{ HTML::script('assets/js/ie/respond.min.js')}}
        {{ HTML::script('assets/js/ie/excanvas.js')}}
        <![endif]-->
    @show
</head>
<body class="" >
    @yield('content')

    @include('front/parts/footer')

    @section('scripts')
        {{ HTML::script('assets/js/jquery.min.js')}}
        <!-- Bootstrap -->
        {{ HTML::script('assets/js/bootstrap.js')}}
        <!-- App -->
        {{ HTML::script('assets/js/app.js')}}
        {{ HTML::script('assets/js/slimscroll/jquery.slimscroll.min.js')}}
        {{ HTML::script('assets/js/app.plugin.js')}}
    @show
</body>
</html>