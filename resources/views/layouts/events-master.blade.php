<html>
<head>
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="{{ url('public/images/dashboard/apple-touch-icon.html') }}">
    <link rel="shortcut icon" href="{{ url('public/images/dashbroad/tab-logo.png') }}">

    <link rel="stylesheet" href="{{ url('public/css/dashboard/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('public/css/dashboard/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ url('public/css/dashboard/perfect-scrollbar.min.css') }}" />

    <link rel="stylesheet" href="{{ url('public/css/dashboard/dataTables.bootstrap4.min.css') }}">

    <link href="{{ url('public/bower_components/Font-Awesome/web-fonts-with-css/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/dashboard/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/dashboard/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/dashboard/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/dashboard/app.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/custom.css') }}" rel="stylesheet">
</head>
<body>
<div class="app side-nav-dark header-info-gradient">
    <div class="layout" id="vue">
        @include('shared.dashboard-navbar')
        @include('shared.side-menu')
        @yield('content')
    </div>
</div>
<script src="{{ url('public/js/master.js') }}"></script>
<script src="{{ url('public/js/dashboard/vendor.js') }}"></script>
<script src="{{ url('public/js/dashboard/app.min.js')}}"></script>
<script src="{{ url('public/js/dashboard/jquery.dataTables.js') }}"></script>
<script src="{{ url('public/js/dashboard/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('public/js/dashboard/data-table.js') }}"></script>
</body>
</html>
