<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ url('public/css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('public/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('public/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('public/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('public/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('public/css/responsive.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ url('public/bower_components/Font-Awesome/web-fonts-with-css/css/fontawesome.min.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title> @yield('title') </title>
</head>
<body class="stretched">
<div id="wrapper" class="clearfix">
    @include('shared.nav-old')
    @yield('content')
    <script src="{{ url('public/js/jquery.js') }}"></script>
    <script src="{{ url('public/js/plugins.js') }}"></script>
    <script src="{{ url('public/js/functions.js') }}"></script>
    <script src="{{ url('public/js/master.js') }}"></script>
</div>
</body>
</html>
