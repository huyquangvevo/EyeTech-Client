<html dir="ltr" lang="en-US">
<head>
    <title> @yield('title') </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <link rel="stylesheet" type="text/css" href="{{ url('public/css/dashboard/bootstrap.css') }}" >

    <link rel="stylesheet" href="{{ url('public/css/dashboard/dataTables.bootstrap4.min.css') }}">

    <link href="{{ url('public/css/dashboard/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('public/css/dashboard/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'> 
    {{-- <link rel="stylesheet" type="text/css" href="{{ url('public/css/dashboard/jquery.fancybox.min.css') }}" > --}}
    {{-- <link rel="stylesheet" href="{{ url('/public/css/newstyle.css')}}">  --}}
    <link href="{{ url('public/css/custom.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
</head>
<body style="font-family:'Roboto';font-size:12pt">
<div class="app side-nav-dark header-info-gradient">
    <div class="layout" id="vue">
            @include('shared.dashboard-navbar')
            @include('shared.side-menu')
            @yield('content')
    </div>
</div>
</body>
</html>
<script src="{{ url('public/js/master.js') }}"></script>
<script src="{{ url('public/js/dashboard/jquery-3.3.1.min.js') }}"></script>
<script src="{{ url('public/js/dashboard/jquery.fancybox.min.js')}}"></script>
<script src="{{ url('public/js/dashboard/morphing-fancy.js')}}"></script>
<script src="{{ url('public/js/dashboard/app.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $("#form-filter").hide();
        $("#btn-filter").click(function(){
            $("#form-filter").slideToggle();
        });
    });
</script>

{{-- <script src="{{ url('public/js/master.js') }}"></script>
<script src="{{ url('public/js/dashboard/vendor.js') }}"></script>
<script src="{{ url('public/js/dashboard/app.min.js')}}"></script>
<script src="{{ url('public/js/dashboard/Chart.min.js') }}"></script>
<script src="{{ url('public/js/dashboard/analytical.js') }}"></script>
<script src="{{ url('public/js/dashboard/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('public/js/dashboard/jquery.dataTables.js') }}"></script>        --}}
    