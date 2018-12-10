@extends('layouts.dashbroad')
@section('title', 'Customer Profile')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-lg-pull-6 col-md-6 col-sm-6">
                    <section class="box-typical">
                        <div class="profile-card">
                            <div class="profile-card-photo">
                                <img src="{{ url('public/img/photo-220-1.jpg') }}" alt=""/>
                            </div>
                            <div class="profile-card-name">Nguyen Thanh Tung</div>
                            <div class="profile-card-status">VIP</div>
                            <div class="profile-card-location">Hoang Mai, Ha Noi</div>
                            <button type="button" class="btn btn-rounded">Edit</button>
                            <button type="button" class="btn btn-rounded">Send Message</button>
                        </div><!--.profile-card-->

                        <div class="profile-statistic tbl">
                            <div class="tbl-row">
                                <div class="tbl-cell">
                                    <b>20</b>
                                    Image
                                </div>
                                <div class="tbl-cell">
                                    <b>2</b>
                                    Visit
                                </div>
                            </div>
                        </div>

                        <ul class="profile-links-list">
                            <li class="nowrap">
                                <i class="font-icon font-icon-pin-2"></i>
                                Address: Hoang Mai, Ha Noi
                            </li>
                            <li class="nowrap">
                                <i class="font-icon font-icon-users-two"></i>
                                Age: 20
                            </li>
                            <li class="nowrap">
                                <i class="font-icon font-icon-users-two"></i>
                                Gender: Male
                            </li>
                            <li class="nowrap">
                                <i class="font-icon font-icon-users-two"></i>
                                Telephone:
                            </li>
                            <li class="nowrap">
                                <i class="font-icon font-icon-fb-fill"></i>
                                <a href="#">facebook.com/example</a>
                            </li>
                        </ul>

                    </section><!--.box-typical-->
                    <section class="box-typical">
                        <header class="box-typical-header-sm bordered">Favouries</header>
                        <div class="box-typical-inner">
                            <p></p>
                        </div>
                    </section>
                </div><!--.col- -->
                <div class="col-lg-6 col-lg-push-3 col-md-12">
                    <section class="box-typical">
                        <header class="box-typical-header-sm">
                            Image Library
                            <div class="slider-arrs">
                                <button type="button" class="posts-slider-prev">
                                    <i class="font-icon font-icon-arrow-left"></i>
                                </button>
                                <button type="button" class="posts-slider-next">
                                    <i class="font-icon font-icon-arrow-right"></i>
                                </button>
                            </div>
                        </header>
                        <div class="posts-slider">
                            <div class="slide">
                                <article class="post-announce">
                                    <div class="post-announce-pic">
                                        <a href="#">
                                            <img src="{{ url('public/img/post-1.jpeg') }}" alt="">
                                        </a>
                                    </div>
                                </article>
                            </div><!--.slide-->
                            <div class="slide">
                                <article class="post-announce">
                                    <div class="post-announce-pic">
                                        <a href="#">
                                            <img src="{{ url('public/img/post-2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                </article>
                            </div><!--.slide-->
                        </div><!--.posts-slider-->
                    </section><!--.box-typical-->
                </div>
            </div><!--.row-->
        </div><!--.container-fluid-->
    </div>
@endsection
