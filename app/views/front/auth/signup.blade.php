@extends('front/default')

@section('title')
    {{ Lang::get('messages.auth.signup.title') }}
@stop

@section('content')
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl">
            <a class="navbar-brand block" href="{{ URL::to('/') }}">{{ Lang::get('messages.app.name') }}</a>
            <section class="m-b-lg">
                <header class="wrapper text-center">
                    <strong>{{ Lang::get('messages.auth.signup.title') }}</strong>
                </header>
                <form action="index.html">
                    <div class="list-group">
                        <div class="list-group-item">
                            <input placeholder="{{ Lang::get('messages.auth.signup.fields.login') }}" class="form-control no-border">
                        </div>
                        <div class="list-group-item">
                            <input type="email" placeholder="Email" class="form-control no-border">
                        </div>
                        <div class="list-group-item">
                            <input type="password" placeholder="{{ Lang::get('messages.auth.signup.fields.password') }}" class="form-control no-border">
                        </div>
                        <div class="list-group-item">
                            <input type="password" placeholder="{{ Lang::get('messages.auth.signup.fields.passwordConfirm') }}" class="form-control no-border">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">{{ Lang::get('messages.auth.signup.fields.buttonCreate') }}</button>
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>{{ Lang::get('messages.auth.signup.fields.alreadyRegistered') }}</small></p>
                    <a href="{{ URL::to('/login') }}" class="btn btn-lg btn-default btn-block">{{ Lang::get('messages.auth.signup.fields.buttonEnter') }}</a>
                </form>
            </section>
        </div>
    </section>
@stop