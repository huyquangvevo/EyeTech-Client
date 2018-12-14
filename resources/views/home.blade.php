@extends('layouts.master')
@section('title', 'Home test')
@section('content')
    <div class="page-container" id="vue">
        @include('shared.quick-view')
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Monthly Revenue</h4>
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
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h2 class="font-size-30 m-b-0 text-success m-t-15">38.6%</h2>
                                        <h5 class="m-b-0 font-size-16 text-semibold">Profit Margin</h5>
                                        <p>from sales in this segment</p>
                                        <div class="m-t-30">
                                            <p class="width-85">European minnow priapumfish mosshead warbonnet shrimpfish bigscale. Cutlassfish porbeagle shark ricefish walking catfish glassfish Black swallower.</p>
                                            <p class="width-85">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar.</p>
                                            <button class="btn btn-default m-t-30">Download Report <i class="ti-angle-right font-size-10 p-l-5"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-right">
                                            <ul class="list-inline">
                                                <li class="m-r-20">
                                                    <a href="#" class="text-semibold text-gray">Today</a>
                                                </li>
                                                <li class="m-r-20">
                                                    <a href="#" class="text-semibold text-gray">7 days</a>
                                                </li>
                                                <li class="m-r-20">
                                                    <a href="#" class="text-semibold text-gray">14 days</a>
                                                </li>
                                                <li class="m-r-20">
                                                    <a href="#" class="text-semibold text-gray active">1 Month</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="m-t-30">
                                            <canvas class="chart" id="segment-chart" style="height: 320px"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media justify-content-between">
                                    <div>
                                        <p class="">Total Revenue</p>
                                        <h2 class="font-size-28 font-weight-light">$23,495</h2>
                                        <span class="text-semibold text-success font-size-15">
                                                    <i class="ti-arrow-up font-size-11"></i>
                                                    <span>12%</span>
                                                </span>
                                    </div>
                                    <div class="align-self-end">
                                        <i class="ti-credit-card font-size-70 text-success opacity-01"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media justify-content-between">
                                    <div>
                                        <p class="">Daily Product</p>
                                        <h2 class="font-size-28 font-weight-light">3,758</h2>
                                        <span class="text-semibold text-danger font-size-15">
                                                    <i class="ti-arrow-down font-size-11"></i>
                                                    <span>7%</span>
                                                </span>
                                    </div>
                                    <div class="align-self-end">
                                        <i class="ti-pie-chart font-size-70 text-info opacity-01"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media justify-content-between">
                                    <div>
                                        <p class="">Growth Rate</p>
                                        <h2 class="font-size-28 font-weight-light">28%</h2>
                                        <span class=" font-size-13 opacity-04">
                                                    from last month
                                                </span>
                                    </div>
                                    <div class="align-self-end">
                                        <i class="ti-bar-chart font-size-70 text-danger opacity-01"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media justify-content-between">
                                    <div>
                                        <p class="">New Customers</p>
                                        <h2 class="font-size-28 font-weight-light">178</h2>
                                        <span class="text-semibold text-success font-size-15">
                                                    <i class="ti-arrow-up font-size-11"></i>
                                                    <span>18%</span>
                                                </span>
                                    </div>
                                    <div class="align-self-end">
                                        <i class="ti-user font-size-70 text-primary opacity-01"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <quick-event-component id_branch="{{ $branch_id }}" events_route="{{ $events_route }}">
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
