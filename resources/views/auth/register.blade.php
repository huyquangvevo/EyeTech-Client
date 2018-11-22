@extends('layouts.app')

@section('content')
<div id="app" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'url' => route('register')]) !!}
                        <branch-select-component></branch-select-component>

                        <div class="form-group row">
                            {!! Form::label('name', 'Name', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control' . ( $errors->has('name') ? ' is-invalid' : '' ), 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => 'Name']) !!}

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', 'Email', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control' . ( $errors->has('email') ? ' is-invalid' : '' ), 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => 'Email']) !!}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', 'Password', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['id' => 'password', 'class' => 'form-control' . ( $errors->has('password') ? ' is-invalid' : '' ), 'required' => 'required', 'placeholder' => 'Password']) !!}

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password_confirmation', 'Password Confirm', ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['id' => 'password-confirm', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password Confirmation']) !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="{{ url('public/js/app.js') }}"></script>
@endsection
