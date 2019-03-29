<html dir="ltr" lang="en-US">
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
    <link rel="stylesheet" href="{{ url('public/css/dashboard/vue2Dropzone.css') }}">
    <link href="{{ url('public/css/dashboard/app.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/custom.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/public/css/newstyle.css')}}"> 

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
    <script src="{{ url('public/js/dashboard/Chart.min.js') }}"></script>
    <script src="{{ url('public/js/dashboard/analytical.js') }}"></script>
    <script src="{{ url('public/js/dashboard/jquery.dataTables.js') }}"></script>
    <script src="{{ url('public/js/dashboard/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    @yield('js')


</body>
</html>

<script src="{{ url('public/js/dashboard/jquery-3.3.1.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $("#form-filter").hide();
        $("#btn-filter").click(function(){
            $("#form-filter").slideToggle();
        });
    });
</script>

{{-- <script src="{{ url('public/js/master.js') }}"></script>
<script src="{{ url('public/js/dashboard/app.min.js')}}"></script> --}}

