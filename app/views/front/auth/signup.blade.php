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
                {{ Form::open(array('url'=>'register', 'class'=>'form-signup')) }}
                    <div class="list-group">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <div class="list-group-item">
                            {{ Form::text('login', null, array('class'=>'form-control no-border', 'placeholder' => Lang::get('messages.auth.signup.fields.login'))) }}
                        </div>
                        <div class="list-group-item">
                            {{ Form::email('email', null, array('class'=>'form-control no-border', 'placeholder' => Lang::get('messages.auth.signup.fields.email'))) }}
                        </div>
                        <div class="list-group-item">
                            {{ Form::password('password', array('class'=>'form-control no-border', 'placeholder' => Lang::get('messages.auth.signup.fields.password'))) }}
                        </div>
                        <div class="list-group-item">
                            {{ Form::password('password_confirmation', array('class'=>'form-control no-border', 'placeholder' => Lang::get('messages.auth.signup.fields.passwordConfirm'))) }}
                        </div>
                    </div>
                    {{ Form::submit(Lang::get('messages.auth.signup.fields.buttonCreate'), array('class'=>'btn btn-lg btn-primary btn-block'))}}
                    <div class="line line-dashed"></div>
                    <p class="text-muted text-center"><small>{{ Lang::get('messages.auth.signup.fields.alreadyRegistered') }}</small></p>
                    <a href="{{ URL::to('login') }}" class="btn btn-lg btn-default btn-block">{{ Lang::get('messages.auth.signup.fields.buttonEnter') }}</a>
                {{ Form::close() }}
            </section>
        </div>
    </section>
@stop