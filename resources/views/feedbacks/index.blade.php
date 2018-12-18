@extends('layouts.master')
@section('title', 'Feedbacks')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content" id="vue">
            <div class="container-fluid">
                <div class="page-header">
                    <h2 class="header-title">List Feedbacks</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                            <span class="breadcrumb-item active">Feedbacks</span>
                        </nav>
                    </div>
                </div>
                <feedback-component id_branch="{{ $branch_id }}"></feedback-component>
            </div>
        </div>
    </div>
@endsection
