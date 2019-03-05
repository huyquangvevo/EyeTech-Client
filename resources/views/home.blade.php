@extends('layouts.master')
@section('title', 'Home test')
@section('content')
                <div class="row">
                    <div class="col-sm-8">
                        <quick-event-component id_branch="{{ $branch_id }}" events_route="{{ $events_route }}" header_route="{{ $route_header }}">
                        </quick-event-component>
                    </div>
                </div>
        @include('shared.footer')
  
@endsection
