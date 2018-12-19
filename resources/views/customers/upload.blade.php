@extends('layouts.master')
@section('title', 'Gallery Image')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content gallery-bg" id="vue">
            <div class="container-fluid">
                <div class="row page-header">
                    <div class="col-md-9">
                        <h2 class="header-title">Gallery Image</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="{{ route('home') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                <a class="breadcrumb-item" href="{{ $gallery_route }}">Library</a>
                                <span class="breadcrumb-item active">Upload</span>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <gallery-upload-component id_customer="{{ $customer_id }}"></gallery-upload-component>
            </div>
        </div>
    </div>
@endsection
