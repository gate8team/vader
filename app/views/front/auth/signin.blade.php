@extends('front/default')

@section('title')
    {{ Lang::get('messages.auth.signin.title') }}
@stop

@section('content')
    <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
        <div class="container aside-xl">
            <a class="navbar-brand block" href="{{ URL::to('/') }}">{{ Lang::get('messages.app.name') }}</a>
            <section class="m-b-lg">
                <header class="wrapper text-center">
                    <strong>{{ Lang::get('messages.auth.signin.title') }}</strong>
                </header>
                {{ Form::open(array('url'=>'login')) }}
                    <div class="list-group">
                        <div class="list-group-item">
                            {{ Form::text('login', null, array('class'=>'form-control no-border', 'placeholder' => Lang::get('messages.auth.signin.fields.login'), 'autofocus' => 'autofocus')) }}
                        </div>
                        <div class="list-group-item">
                            {{ Form::password('password', array('class'=>'form-control no-border', 'placeholder' => Lang::get('messages.auth.signin.fields.password'))) }}
                        </div>
                    </div>

                    {{ Form::submit(Lang::get('messages.auth.signin.fields.buttonEnter'), array('class'=>'btn btn-lg btn-primary btn-block'))}}
                    <div class="text-center m-t m-b"><a href="#"><small>{{ Lang::get('messages.auth.signin.fields.forgetPassword') }}</small></a></div>
                    <div class="line line-dashed"></div>
                                        <p class="text-muted text-center"><small>{{ Lang::get('messages.auth.signin.fields.noAccount') }}</small></p>
                                        <a href="{{ URL::to('signup') }}" class="btn btn-lg btn-default btn-block">{{ Lang::get('messages.auth.signin.fields.buttonCreate') }}</a>
                {{ Form::close() }}
            </section>
        </div>
    </section>
@stop