<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title Page-->
    <title>Eyetech Register</title>

    <!-- Icons font CSS-->
    <link rel="stylesheet" href="{{ url('public/css/lib/font-awesome/font-awesome.min.css') }}">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
{{--    <script src="{{ url('public/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"></script>--}}
    <link href="public/bower_components/select2/dist/css/select2.min.css" rel="stylesheet" media="all">
    <link href="public/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="public/css/register.css" rel="stylesheet" media="all">
</head>

<body>
<div id="register" class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <register-component></register-component>
</div>

<script src="{{ url('public/js/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ url('public/bower_components/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ url('public/js/register.js') }}"></script>
<script src="{{ url('public/js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
