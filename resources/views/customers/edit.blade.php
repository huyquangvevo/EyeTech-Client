@extends('layouts.master')
@section('title', 'Customer Edit')
@section('content')
    <div class="page-container">
        @include('shared.quick-view')
        <div class="main-content" id="vue">
            <div class="container-fluid">
                <div class="page-header">
                    <h2 class="header-title">Customer Info</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                            <a class="breadcrumb-item" href="#">Tables</a>
                            <span class="breadcrumb-item active">Data Table</span>
                        </nav>
                    </div>
                </div>

                <customer-edit-component id_customer="{{ $id }}"></customer-edit-component>

            </div>
        </div>
        @include('shared.footer')
    </div>
@endsection
