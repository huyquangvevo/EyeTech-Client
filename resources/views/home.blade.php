@extends('layouts.master')
@section('title', 'Home test')
@section('content')
<div class="page-container custom-page-container">
                <div class="container-fluid">
                        <div class="main-content" >
                                {{-- <event-component></event-component>        --}}
                                <list-customer id_branch="{{ $branch_id }}" events_route="{{ $events_route }}" header_route="{{ $route_header }}">
                                </list-customer>
                               
                        </div>
                </div>
                {{-- <event-component></event-component>        --}}

</div>
@endsection

