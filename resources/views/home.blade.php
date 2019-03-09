@extends('layouts.master')
@section('title', 'Home test')
@section('content')
<div class="page-container custom-page-container">

<div class="main-content" >
        <div class="container-fluid">
            <div class="row">
                    <div class="col-sm-12">
                        {{-- <quick-event-component id_branch="{{ $branch_id }}" events_route="{{ $events_route }}" header_route="{{ $route_header }}">
                        </quick-event-component> --}}
                        {{-- <employee-info></employee-info> --}}
                        <list-customer></list-customer>
                    </div>
            </div>
        </div>
</div>
</div>
@endsection