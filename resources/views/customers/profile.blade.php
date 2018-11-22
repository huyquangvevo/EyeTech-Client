<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StartUI - Premium Bootstrap 4 Admin Dashboard Template</title>

    <link href="{{ url('public/img/favicon.144x144.png') }}" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="{{ url('public/img/favicon.114x114.png') }}" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="{{ url('public/img/favicon.72x72.png') }}" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="{{ url('public/img/favicon.57x57.png') }}" rel="apple-touch-icon" type="image/png">
    <link href="{{ url('public/img/favicon.png') }}" rel="icon" type="image/png">
    <link href="{{ url('public/img/favicon.ico') }}" rel="shortcut icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ url('public/css/separate/vendor/slick.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/separate/pages/profile.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/lib/font-awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/lib/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/main.css') }}">
</head>
<body>

<header class="site-header">
    <div class="container-fluid">
        <a href="#" class="site-logo">
            <img class="hidden-md-down" src="img/logo-2.png" alt="">
            <img class="hidden-lg-down" src="img/logo-2-mob.png" alt="">
        </a>

        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>

        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown dropdown-notification notif">
                        <a href="#"
                           class="header-alarm dropdown-toggle active"
                           id="dd-notification"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            <i class="font-icon-alarm"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-notif" aria-labelledby="dd-notification">
                            <div class="dropdown-menu-notif-header">
                                Notifications
                                <span class="label label-pill label-danger">4</span>
                            </div>
                            <div class="dropdown-menu-notif-list">
                                <div class="dropdown-menu-notif-item">
                                    <div class="photo">
                                        <img src="public/img/photo-64-1.jpg" alt="">
                                    </div>
                                    <div class="dot"></div>
                                    <a href="#">Morgan</a> was bothering about something
                                    <div class="color-blue-grey-lighter">7 hours ago</div>
                                </div>
                                <div class="dropdown-menu-notif-item">
                                    <div class="photo">
                                        <img src="img/photo-64-2.jpg" alt="">
                                    </div>
                                    <div class="dot"></div>
                                    <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
                                    <div class="color-blue-grey-lighter">7 hours ago</div>
                                </div>
                                <div class="dropdown-menu-notif-item">
                                    <div class="photo">
                                        <img src="img/photo-64-3.jpg" alt="">
                                    </div>
                                    <div class="dot"></div>
                                    <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
                                    <div class="color-blue-grey-lighter">7 hours ago</div>
                                </div>
                                <div class="dropdown-menu-notif-item">
                                    <div class="photo">
                                        <img src="img/photo-64-4.jpg" alt="">
                                    </div>
                                    <a href="#">Lionely</a> wants to go to <a href="#">Cinema</a> with you to see <a href="#">This Movie</a>
                                    <div class="color-blue-grey-lighter">7 hours ago</div>
                                </div>
                            </div>
                            <div class="dropdown-menu-notif-more">
                                <a href="#">See more</a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown dropdown-notification messages">
                        <a href="#"
                           class="header-alarm dropdown-toggle active"
                           id="dd-messages"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            <i class="font-icon-mail"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-messages" aria-labelledby="dd-messages">
                            <div class="dropdown-menu-messages-header">
                                <ul class="nav" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active"
                                           data-toggle="tab"
                                           href="#tab-incoming"
                                           role="tab">
                                            Inbox
                                            <span class="label label-pill label-danger">8</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           data-toggle="tab"
                                           href="#tab-outgoing"
                                           role="tab">Outbox</a>
                                    </li>
                                </ul>
                                <!--<button type="button" class="create">
                                    <i class="font-icon font-icon-pen-square"></i>
                                </button>-->
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-incoming" role="tabpanel">
                                    <div class="dropdown-menu-messages-list">
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                            <span class="mess-item-name">Tim Collins</span>
                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                            <span class="mess-item-name">Christian Burton</span>
                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                            <span class="mess-item-name">Tim Collins</span>
                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                            <span class="mess-item-name">Christian Burton</span>
                                            <span class="mess-item-txt">Morgan was bothering about something...</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-outgoing" role="tabpanel">
                                    <div class="dropdown-menu-messages-list">
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                            <span class="mess-item-name">Christian Burton</span>
                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something...</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                            <span class="mess-item-name">Tim Collins</span>
                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="img/avatar-2-64.png" alt=""></span>
                                            <span class="mess-item-name">Christian Burtons</span>
                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="img/photo-64-2.jpg" alt=""></span>
                                            <span class="mess-item-name">Tim Collins</span>
                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-menu-notif-more">
                                <a href="#">See more</a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown dropdown-lang">
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-us"></span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-col">
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ru"></span>Русский</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-de"></span>Deutsch</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-it"></span>Italiano</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-es"></span>Español</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-pl"></span>Polski</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-li"></span>Lietuviu</a>
                            </div>
                            <div class="dropdown-menu-col">
                                <a class="dropdown-item current" href="#"><span class="flag-icon flag-icon-us"></span>English</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-fr"></span>Français</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-by"></span>Беларускi</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ua"></span>Українська</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-cz"></span>Česky</a>
                                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-ch"></span>中國</a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="img/avatar-2-64.png" alt="">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
                        </div>
                    </div>

                    <button type="button" class="burger-right">
                        <i class="font-icon-menu-addl"></i>
                    </button>
                </div><!--.site-header-shown-->

                <div class="mobile-menu-right-overlay"></div>
                <div class="site-header-collapsed">
                    <div class="site-header-collapsed-in">
                        <div class="site-header-search-container">
                            <form class="site-header-search closed">
                                <input type="text" placeholder="Search"/>
                                <button type="submit">
                                    <span class="font-icon-search"></span>
                                </button>
                                <div class="overlay"></div>
                            </form>
                        </div>
                    </div><!--.site-header-collapsed-in-->
                </div><!--.site-header-collapsed-->
            </div><!--site-header-content-in-->
        </div><!--.site-header-content-->
    </div><!--.container-fluid-->
</header><!--.site-header-->

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
                                        <img src="{{ url('img/post-1.jpeg') }}" alt="">
                                    </a>
                                </div>
                            </article>
                        </div><!--.slide-->
                        <div class="slide">
                            <article class="post-announce">
                                <div class="post-announce-pic">
                                    <a href="#">
                                        <img src="{{ url('img/post-2.jpg') }}" alt="">
                                    </a>
                                </div>
                            </article>
                        </div><!--.slide-->
                    </div><!--.posts-slider-->
                </section><!--.box-typical-->
            </div>
        </div><!--.row-->
    </div><!--.container-fluid-->
</div><!--.page-content-->

<script src="{{ url('public/js/lib/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('public/js/lib/popper/popper.min.js') }}"></script>
<script src="{{ url('public/js/lib/tether/tether.min.js') }}"></script>
<script src="{{ url('public/js/lib/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ url('public/js/plugins.js') }}"></script>
<script src="{{ url('public/js/lib/slick-carousel/slick.min.js') }}"></script>
<script>
    $(function () {
        $(".profile-card-slider").slick({
            slidesToShow: 1,
            adaptiveHeight: true,
            prevArrow: '<i class="slick-arrow font-icon-arrow-left"></i>',
            nextArrow: '<i class="slick-arrow font-icon-arrow-right"></i>'
        });

        var postsSlider = $(".posts-slider");

        postsSlider.slick({
            slidesToShow: 4,
            adaptiveHeight: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1700,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1350,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.posts-slider-prev').click(function(){
            postsSlider.slick('slickPrev');
        });

        $('.posts-slider-next').click(function(){
            postsSlider.slick('slickNext');
        });

        /* ==========================================================================
         Recomendations slider
         ========================================================================== */

        var recomendationsSlider = $(".recomendations-slider");

        recomendationsSlider.slick({
            slidesToShow: 4,
            adaptiveHeight: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1700,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1350,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.recomendations-slider-prev').click(function() {
            recomendationsSlider.slick('slickPrev');
        });

        $('.recomendations-slider-next').click(function(){
            recomendationsSlider.slick('slickNext');
        });
    });
</script>
<script src="{{ url('public/js/app.js') }}"></script>
</body>
</html>
