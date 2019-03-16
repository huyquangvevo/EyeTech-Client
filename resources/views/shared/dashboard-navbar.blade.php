<div class="header navbar">
        <div class="header-container">
            @if(Auth::check())
                <div class="nav-logo">
                    <a href="{{ route('home') }}">
                        <div class="logo logo-dark"></div>
                        <div class="logo logo-white"></div>
                    </a>
                </div>
                <ul class="nav-left">
                    <li>
                        <a class="sidenav-fold-toggler" href="javascript:void(0);">
                            <i class="mdi mdi-menu"></i>
                        </a>
                        <a class="sidenav-expand-toggler" href="javascript:void(0);">
                            <i class="mdi mdi-menu"></i>
                        </a>
                    </li>
                    <li class="search-box">
                        <a class="search-toggle" href="javascript:void(0);">
                            <i class="search-icon mdi mdi-magnify"></i>
                            <i class="search-icon-close mdi mdi-close-circle-outline"></i>
                        </a>
                    </li>
                    <li class="search-input">
                        <input class="form-control" type="text" placeholder="Type to search...">
                        <div class="search-predict">
                            <div class="search-wrapper scrollable">
                                <div class="p-v-10">
                                    <span class="display-block m-v-5 p-h-20 text-gray">
                                        <i class="ti-file p-r-5"></i>
                                        <span>Events</span>
                                    </span>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="media-hover p-h-20">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-success">
                                                        <i class="mdi mdi-file-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Today</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="media-hover p-h-20">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-success">
                                                        <i class="mdi mdi-file-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Today</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="m-h-20 border top"></div>
                                <div class="p-v-10">
                                    <span class="display-block m-v-5 p-h-20 text-gray">
                                        <i class="ti-user p-r-5"></i>
                                        <span>Customers</span>
                                    </span>
                                    <ul class="list-media">
                                        <li class="list-item">
                                            <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                <div class="media-img">
                                                    <img src="#" alt="">
                                                </div>
                                                <div class="info">
                                                    <span class="title p-t-10">Đinh Viết Sang</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="search-footer">
                                <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                            </div>
                        </div>
                    </li>
                </ul>
            @endif
    
            <ul class="nav-right row">
                @if(Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}" style="margin-right: 50px;">Register</a></li>
                @else
                    {{--<nav-right-noti-component></nav-right-noti-component>--}}
                    <nav-right-profile-component route_logout="{{ $logout_route }}"></nav-right-profile-component>
                    <li class="m-r-10">
                        <a class="quick-view-toggler" href="javascript:void(0);">
                            <i class="mdi mdi-format-indent-decrease"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>