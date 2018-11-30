<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eyetech Home</title>

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
    <link rel="stylesheet" href="{{ url('public/css/lib/lobipanel/lobipanel.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/separate/vendor/lobipanel.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/lib/jqueryui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/separate/pages/widgets.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/lib/font-awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/lib/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/custom.css') }}">
</head>
<body class="with-side-menu control-panel control-panel-compact">

<header class="site-header">
    <div class="container-fluid">
        <a href="#" class="site-logo">
            <img class="hidden-md-down" src="public/img/logo-22.png" alt="">
            <img class="hidden-lg-down" src="public/img/logo-22-mob.png" alt="">
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
                                        <img src="public/img/photo-64-2.jpg" alt="">
                                    </div>
                                    <div class="dot"></div>
                                    <a href="#">Lioneli</a> had commented on this <a href="#">Super Important Thing</a>
                                    <div class="color-blue-grey-lighter">7 hours ago</div>
                                </div>
                                <div class="dropdown-menu-notif-item">
                                    <div class="photo">
                                        <img src="public/img/photo-64-3.jpg" alt="">
                                    </div>
                                    <div class="dot"></div>
                                    <a href="#">Xavier</a> had commented on the <a href="#">Movie title</a>
                                    <div class="color-blue-grey-lighter">7 hours ago</div>
                                </div>
                                <div class="dropdown-menu-notif-item">
                                    <div class="photo">
                                        <img src="{{ url('public/img/photo-64-4.jpg') }}" alt="">
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
                                            <span class="avatar-preview avatar-preview-32"><img src="{{ url('public/img/photo-64-2.jpg') }}" alt=""></span>
                                            <span class="mess-item-name">Tim Collins</span>
                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="public/img/avatar-2-64.png" alt=""></span>
                                            <span class="mess-item-name">Christian Burton</span>
                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="public/img/photo-64-2.jpg" alt=""></span>
                                            <span class="mess-item-name">Tim Collins</span>
                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="public/img/avatar-2-64.png" alt=""></span>
                                            <span class="mess-item-name">Christian Burton</span>
                                            <span class="mess-item-txt">Morgan was bothering about something...</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-outgoing" role="tabpanel">
                                    <div class="dropdown-menu-messages-list">
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="public/img/avatar-2-64.png" alt=""></span>
                                            <span class="mess-item-name">Christian Burton</span>
                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something...</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="public/img/photo-64-2.jpg" alt=""></span>
                                            <span class="mess-item-name">Tim Collins</span>
                                            <span class="mess-item-txt">Morgan was bothering about something! Morgan was bothering about something.</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="public/img/avatar-2-64.png" alt=""></span>
                                            <span class="mess-item-name">Christian Burtons</span>
                                            <span class="mess-item-txt">Morgan was bothering about something!</span>
                                        </a>
                                        <a href="#" class="mess-item">
                                            <span class="avatar-preview avatar-preview-32"><img src="public/img/photo-64-2.jpg" alt=""></span>
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
                            <img src="public/img/avatar-2-64.png" alt="">
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

<div class="mobile-menu-left-overlay"></div>
<nav class="side-menu">
    <ul class="side-menu-list">
        <li class="purple with-sub">
	            <span>
	                <i class="font-icon font-icon-comments active"></i>
	                <span class="lbl">Messages</span>
	            </span>
            <ul>
                <li><a href="messenger.html"><span class="lbl">Messenger</span></a></li>
                <li><a href="chat.html"><span class="lbl">Messages</span><span class="label label-custom label-pill label-danger">8</span></a></li>
                <li><a href="chat-write.html"><span class="lbl">Write Message</span></a></li>
                <li><a href="chat-index.html"><span class="lbl">Select User</span></a></li>
            </ul>
        </li>
        <li class="red">
            <a href="mail.html">
                <i class="font-icon glyphicon glyphicon-send"></i>
                <span class="lbl">Mail</span>
            </a>
        </li>
        <li class="gold with-sub">
	            <span>
	                <i class="font-icon font-icon-edit"></i>
	                <span class="lbl">Forms</span>
	            </span>
            <ul>
                <li><a href="ui-form.html"><span class="lbl">Basic Inputs</span></a></li>
                <li><a href="ui-buttons.html"><span class="lbl">Buttons</span></a></li>
                <li><a href="ui-select.html"><span class="lbl">Select &amp; Tags</span></a></li>
                <li><a href="ui-checkboxes.html"><span class="lbl">Checkboxes &amp; Radios</span></a></li>
                <li><a href="ui-form-validation.html"><span class="lbl">Validation</span></a></li>
                <li><a href="typeahead.html"><span class="lbl">Typeahead</span></a></li>
                <li><a href="steps.html"><span class="lbl">Steps</span></a></li>
                <li><a href="ui-form-input-mask.html"><span class="lbl">Input Mask</span></a></li>
                <li><a href="form-flex-labels.html"><span class="lbl">Flex Labels</span></a></li>
                <li><a href="ui-form-extras.html"><span class="lbl">Extras</span></a></li>
            </ul>
        </li>
        <li class="blue with-sub">
	            <span>
	                <i class="font-icon font-icon-user"></i>
	                <span class="lbl">Profile</span>
	            </span>
            <ul>
                <li><a href="profile.html"><span class="lbl">Version 1</span></a></li>
                <li><a href="profile-2.html"><span class="lbl">Version 2</span></a></li>
            </ul>
        </li>
        <li class="orange-red with-sub">
	            <span>
	                <i class="font-icon font-icon-help"></i>
	                <span class="lbl">Support</span>
	            </span>
            <ul>
                <li><a href="documentation.html"><span class="lbl">Docs (example)</span></a></li>
                <li><a href="faq.html"><span class="lbl">FAQ Simple</span></a></li>
                <li><a href="faq-search.html"><span class="lbl">FAQ Search</span></a></li>
            </ul>
        </li>
        <li class="magenta opened">
            <a href="scheduler.html">
                <i class="font-icon font-icon-calend"></i>
                <span class="lbl">Calendar</span>
            </a>
        </li>
    </ul>
</nav><!--.side-menu-->

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="chart-statistic-box">
                    <div class="chart-txt">
                        <div class="chart-txt-top">
                            <p><span class="unit">$</span><span class="number">1540</span></p>
                            <p class="caption">Week income</p>
                        </div>
                        <table class="tbl-data">
                            <tr>
                                <td class="price color-purple">120$</td>
                                <td>Orders</td>
                            </tr>
                            <tr>
                                <td class="price color-yellow">15$</td>
                                <td>Investments</td>
                            </tr>
                            <tr>
                                <td class="price color-lime">55$</td>
                                <td>Others</td>
                            </tr>
                        </table>
                    </div>
                    <div class="chart-container">
                        <div class="chart-container-in">
                            <div id="chart_div"></div>
                            <header class="chart-container-title">Income</header>
                            <div class="chart-container-x">
                                <div class="item"></div>
                                <div class="item">tue</div>
                                <div class="item">wed</div>
                                <div class="item">thu</div>
                                <div class="item">fri</div>
                                <div class="item">sat</div>
                                <div class="item">sun</div>
                                <div class="item">mon</div>
                                <div class="item"></div>
                            </div>
                            <div class="chart-container-y">
                                <div class="item">300</div>
                                <div class="item"></div>
                                <div class="item">250</div>
                                <div class="item"></div>
                                <div class="item">200</div>
                                <div class="item"></div>
                                <div class="item">150</div>
                                <div class="item"></div>
                                <div class="item">100</div>
                                <div class="item"></div>
                                <div class="item">50</div>
                                <div class="item"></div>
                            </div>
                        </div>
                    </div>
                </div><!--.chart-statistic-box-->
            </div><!--.col-->
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-sm-6">
                        <article class="statistic-box red">
                            <div>
                                <div class="number">26</div>
                                <div class="caption"><div>Open tickets</div></div>
                                <div class="percent">
                                    <div class="arrow up"></div>
                                    <p>15%</p>
                                </div>
                            </div>
                        </article>
                    </div><!--.col-->
                    <div class="col-sm-6">
                        <article class="statistic-box purple">
                            <div>
                                <div class="number">12</div>
                                <div class="caption"><div>Closes tickets</div></div>
                                <div class="percent">
                                    <div class="arrow down"></div>
                                    <p>11%</p>
                                </div>
                            </div>
                        </article>
                    </div><!--.col-->
                    <div class="col-sm-6">
                        <article class="statistic-box yellow">
                            <div>
                                <div class="number">104</div>
                                <div class="caption"><div>New clients</div></div>
                                <div class="percent">
                                    <div class="arrow down"></div>
                                    <p>5%</p>
                                </div>
                            </div>
                        </article>
                    </div><!--.col-->
                    <div class="col-sm-6">
                        <article class="statistic-box green">
                            <div>
                                <div class="number">29</div>
                                <div class="caption"><div>Here is an example of a long name</div></div>
                                <div class="percent">
                                    <div class="arrow up"></div>
                                    <p>84%</p>
                                </div>
                            </div>
                        </article>
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.col-->
        </div><!--.row-->

        <div id="event" class="row">
            <div class="col-xl-12 dahsboard-column">
                <event-component></event-component>
            </div><!--.col-->
        </div>
    </div><!--.container-fluid-->
</div><!--.page-content-->

<div class="control-panel-container">
    <ul>
        <li class="tasks">
            <div class="control-item-header">
                <a href="#" class="icon-toggle">
                    <span class="caret-down fa fa-caret-down"></span>
                    <span class="icon fa fa-tasks"></span>
                </a>
                <span class="text">Task list</span>
                <div class="actions">
                    <a href="#">
                        <span class="fa fa-refresh"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-cog"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-trash"></span>
                    </a>
                </div>
            </div>
            <div class="control-item-content">
                <div class="control-item-content-text">You don't have pending tasks.</div>
            </div>
        </li>
        <li class="sticky-note">
            <div class="control-item-header">
                <a href="#" class="icon-toggle">
                    <span class="caret-down fa fa-caret-down"></span>
                    <span class="icon fa fa-file"></span>
                </a>
                <span class="text">Sticky Note</span>
                <div class="actions">
                    <a href="#">
                        <span class="fa fa-refresh"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-cog"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-trash"></span>
                    </a>
                </div>
            </div>
            <div class="control-item-content">
                <div class="control-item-content-text">
                    StartUI – a full featured, premium web application admin dashboard built with Twitter Bootstrap 4, JQuery and CSS
                </div>
            </div>
        </li>
        <li class="emails">
            <div class="control-item-header">
                <a href="#" class="icon-toggle">
                    <span class="caret-down fa fa-caret-down"></span>
                    <span class="icon fa fa-envelope"></span>
                </a>
                <span class="text">Recent e-mails</span>
                <div class="actions">
                    <a href="#">
                        <span class="fa fa-refresh"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-cog"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-trash"></span>
                    </a>
                </div>
            </div>
            <div class="control-item-content">
                <section class="control-item-actions">
                    <a href="#" class="link">My e-mails</a>
                    <a href="#" class="mark">Mark visible as read</a>
                </section>
                <ul class="control-item-lists">
                    <li>
                        <a href="#">
                            <h6>Welcome to the Community!</h6>
                            <div>Hi, welcome to the my app...</div>
                            <div>
                                Message text
                            </div>
                        </a>
                        <a href="#" class="reply-all">Reply all</a>
                    </li>
                    <li>
                        <a href="#">
                            <h6>Welcome to the Community!</h6>
                            <div>Hi, welcome to the my app...</div>
                            <div>
                                Message text
                            </div>
                        </a>
                        <a href="#" class="reply-all">Reply all</a>
                    </li>
                    <li>
                        <a href="#">
                            <h6>Welcome to the Community!</h6>
                            <div>Hi, welcome to the my app...</div>
                            <div>
                                Message text
                            </div>
                        </a>
                        <a href="#" class="reply-all">Reply all</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="add">
            <div class="control-item-header">
                <a href="#" class="icon-toggle no-caret">
                    <span class="icon fa fa-plus"></span>
                </a>
            </div>
        </li>
    </ul>
    <a class="control-panel-toggle">
        <span class="fa fa-angle-double-left"></span>
    </a>
</div>

<script src="{{ url('public/js/lib/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('public/js/lib/popper/popper.min.js') }}"></script>
<script src="{{ url('public/js/lib/tether/tether.min.js') }}"></script>
<script src="{{ url('public/js/lib/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ url('public/js/plugins.js') }}"></script>

<script type="text/javascript" src="{{ url('public/js/lib/jqueryui/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/js/lib/lobipanel/lobipanel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('public/js/lib/match-height/jquery.matchHeight.min.js') }}"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    $(document).ready(function() {
        $('.panel').each(function () {
            try {
                $(this).lobiPanel({
                    sortable: true
                }).on('dragged.lobiPanel', function(ev, lobiPanel){
                    $('.dahsboard-column').matchHeight();
                });
            } catch (err) {}
        });

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var dataTable = new google.visualization.DataTable();
            dataTable.addColumn('string', 'Day');
            dataTable.addColumn('number', 'Values');
            // A column for custom tooltip content
            dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
            dataTable.addRows([
                ['MON',  130, ' '],
                ['TUE',  130, '130'],
                ['WED',  180, '180'],
                ['THU',  175, '175'],
                ['FRI',  200, '200'],
                ['SAT',  170, '170'],
                ['SUN',  250, '250'],
                ['MON',  220, '220'],
                ['TUE',  220, ' ']
            ]);

            var options = {
                height: 314,
                legend: 'none',
                areaOpacity: 0.18,
                axisTitlesPosition: 'out',
                hAxis: {
                    title: '',
                    textStyle: {
                        color: '#fff',
                        fontName: 'Proxima Nova',
                        fontSize: 11,
                        bold: true,
                        italic: false
                    },
                    textPosition: 'out'
                },
                vAxis: {
                    minValue: 0,
                    textPosition: 'out',
                    textStyle: {
                        color: '#fff',
                        fontName: 'Proxima Nova',
                        fontSize: 11,
                        bold: true,
                        italic: false
                    },
                    baselineColor: '#16b4fc',
                    ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
                    gridlines: {
                        color: '#1ba0fc',
                        count: 15
                    }
                },
                lineWidth: 2,
                colors: ['#fff'],
                curveType: 'function',
                pointSize: 5,
                pointShapeType: 'circle',
                pointFillColor: '#f00',
                backgroundColor: {
                    fill: '#008ffb',
                    strokeWidth: 0,
                },
                chartArea:{
                    left:0,
                    top:0,
                    width:'100%',
                    height:'100%'
                },
                fontSize: 11,
                fontName: 'Proxima Nova',
                tooltip: {
                    trigger: 'selection',
                    isHtml: true
                }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(dataTable, options);
        }
        $(window).resize(function(){
            drawChart();
            setTimeout(function(){
            }, 1000);
        });
    });
</script>
<script src="{{ url('public/js/event.js') }}"></script>
<script src="{{ url('public/js/app.js') }}"></script>
</body>
</html>
