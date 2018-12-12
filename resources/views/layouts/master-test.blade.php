<html dir="ltr" lang="en-US">
<head>
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" href="{{ url('public/images/dashboard/apple-touch-icon.html') }}">
    <link rel="shortcut icon" href="{{ url('public/images/dashboard/favicon.png') }}">

    <link rel="stylesheet" href="{{ url('public/css/dashboard/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ url('public/css/dashboard/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ url('public/css/dashboard/perfect-scrollbar.min.css') }}" />

    <link href="{{ url('public/css/dashboard/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/dashboard/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/dashboard/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/dashboard/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/dashboard/app.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <div class="app header-info">
        <div class="layout">
            @include('shared.nav-test')
            @include('shared.side-test')
            @yield('content')
        </div>
    </div>
    <script src="{{ url('public/js/dashboard/vendor.js') }}"></script>
    <script src="{{ url('public/js/dashboard/app.min.js')}}"></script>
    <script src="{{ url('public/js/dashboard/Chart.min.js') }}"></script>
    <script src="{{ url('public/js/dashboard/analytical.js') }}"></script>
    <script src="{{ url('public/js/master.js') }}"></script>
</body>
</html>
