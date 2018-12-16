@extends('layouts.master')
@section('title', 'Customer Profile')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content" id="vue">
            <div class="container-fluid">
                <div class="row page-header">
                    <div class="col-md-9">
                        <h2 class="header-title">Customer Profile</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                <a class="breadcrumb-item" href="{{ route('events.index') }}">Events</a>
                                <span class="breadcrumb-item active">Customer</span>
                            </nav>
                        </div>
                    </div>
                    <customer-profile-action-component id_customer="{{ $id }}" route_home="{{ $home_route }}"></customer-profile-action-component>
                </div>
                <div class="row my-2">
                    <customer-quick-info-component id_customer="{{ $id }}"></customer-quick-info-component>
                    <div class="col-md-9 customer-info customer-profile-card">
                        <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                                </li>
                            </ul>
                        <div class="tab-content py-4">
                            <customer-info-component id_customer="{{ $id }}"></customer-info-component>
                            <customer-message-component></customer-message-component>
                            <customer-edit-component id_customer="{{ $id }}"></customer-edit-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('shared.footer')
    </div>
@endsection
