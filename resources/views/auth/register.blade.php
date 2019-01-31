@extends('layouts.master-auth')
@section('title', 'Register')
@section('content')
    <div class="auth-container">
        <div class="main-content" id="vue">
            <register-component register_api_route="{{ $registerApiRouter }}" login_form_route="{{ $loginFormRoute }}"></register-component>
        </div>
    </div>
@endsection
