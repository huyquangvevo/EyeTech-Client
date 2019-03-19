@extends('layouts.master')
@section('title', 'Home test')
@section('content')
<div class="page-container custom-page-container">
                <div class="container-fluid">
                        <div class="main-content" >
                                {{-- <event-component></event-component>        --}}
                                <list-customer></list-customer>
                        </div>
                </div>
                <event-component></event-component>       

</div>
@endsection

