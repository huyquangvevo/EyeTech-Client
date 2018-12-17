@extends('layouts.master-auth')
@section('title', 'Login')
@section('content')
    <div class="auth-container">
        <div class="main-content" id="vue">
            <div class="layout bg-white full-height">
                <div class="row no-gutters">
                    <div class="col-md-8 d-none d-md-block align-self-end auth-background">
                        <div class="row full-height">
                            <div class="col-md-10 align-self-center">
                                <div class="m-b-50 m-l-70">
                                    <img class="img-fluid" src="#" alt="">
                                    <div class="m-t-15 m-l-20">
                                        <h1 class="font-weight-light font-size-35 text-white">Exploring The World</h1>
                                        <p class="text-white width-60 text-opacity m-t-25 font-size-16">why we should never stop exploring the world</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center">
                        <div class="row">
                            <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                                <div class="p-v-25">
                                    <h1 class="m-b-30">Login</h1>
                                    {!! Form::open(['method' => 'POST', 'url' => route('login')]) !!}
                                    <div class="form-group">
                                        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}

                                        {!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control' . ( $errors->has('email') ? ' is-invalid' : '' ), 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => 'Email']) !!}

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                                        {!! Form::password('password', ['id' => 'password', 'class' => 'form-control' . ( $errors->has('password') ? ' is-invalid' : '' ), 'required' => 'required', 'placeholder' => 'Password']) !!}

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                        @endif
                                    </div>

                                    <div class="checkbox font-size-13">
                                        {!! Form::checkbox('remember', 1, old('remember') ? true : false, ['id' => 'agreement', 'type' => 'checkbox', 'name' => 'agreement']) !!}
                                        {!! Form::label('agreement', 'Remember Me', ['class' => 'form-check-label']) !!}
                                    </div>

                                    <div class="form-group m-t-20">
                                        {!! Form::submit('Login', ['class' => 'btn btn-gradient-success btn-block btn-lg']) !!}

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
