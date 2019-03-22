{{-- @extends('layouts.events-master')
@section('title', 'Events')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content" id="vue">
            <div class="container-fluid">
                <div class="page-header">
                    <h2 class="header-title">Events Detail</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                            <span class="breadcrumb-item active">Events</span>
                        </nav>
                    </div>
                </div>
                <detail-event-component id_branch="{{ $branch_id }}" header_route="{{ $route_header }}"></detail-event-component>
            </div>
        </div>

        @include('shared.footer')

    </div>
@endsection --}}

@extends('layouts.master')
@section('title', 'Home test')
@section('content')
<div class="page-container custom-page-container">
                <div class="container-fluid" style="height:100%">
                        <div class="main-content" >
                                {{-- <event-component></event-component>        --}}
                                {{-- <list-customer id_branch="{{ $branch_id }}" events_route="{{ $events_route }}" header_route="{{ $route_header }}">
                                </list-customer> --}}
                               
                        </div>
                </div>
                <event-component></event-component>       

</div>
@endsection


