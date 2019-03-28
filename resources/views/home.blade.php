@extends('layouts.master')
@section('title', 'Home test')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <quick-event-component id_branch="{{ $branch_id }}" events_route="{{ $events_route }}" header_route="{{ $route_header }}">
                        </quick-event-component>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Products Statistic</h4>
                                <div class="card-toolbar">
                                    <ul>
                                        <li>
                                            <a class="text-gray" href="javascript:void(0)">
                                                <i class="mdi mdi-dots-vertical font-size-20"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center m-t-20">
                                    <h2 class="font-weight-light font-size-30 m-b-0">23,178</h2>
                                    <p class="opacity-07">Total Products</p>
                                </div>
                                <div class="m-t-60">
                                    <canvas class="chart" id="statistic-chart" style="height: 320px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('shared.footer')
    </div>
@endsection
