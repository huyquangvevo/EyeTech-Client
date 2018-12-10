<html dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ url('public/img/favicon.144x144.png') }}" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="{{ url('public/img/favicon.114x114.png') }}" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="{{ url('public/img/favicon.72x72.png') }}" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="{{ url('public/img/favicon.57x57.png') }}" rel="apple-touch-icon" type="image/png">
    <link href="{{ url('public/img/logo-22.png') }}" rel="icon" type="image/png">
    <link href="{{ url('public/img/logo-22.png') }}" rel="shortcut icon">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <link rel="stylesheet" href="{{ url('public/css/lib/lobipanel/lobipanel.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/separate/vendor/lobipanel.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/lib/jqueryui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/separate/pages/widgets.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/lib/font-awesome/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/lib/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/custom.css') }}">

    <title> @yield('title') </title>
</head>
<body class="with-side-menu control-panel control-panel-compact">
<div>
    @include('shared.dashboard-navbar')
    @include('shared.mobile-side-menu')
    @include('shared.side-menu')
    @yield('content')
    @include('shared.control-panel')
    <script src="{{ url('public/js/lib/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ url('public/js/lib/popper/popper.min.js') }}"></script>
    <script src="{{ url('public/js/lib/tether/tether.min.js') }}"></script>
    <script src="{{ url('public/js/lib/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/js/plugins.js') }}"></script>
    <script src="{{ url('public/js/lib/slick-carousel/slick.min.js') }}"></script>
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
    <script src="{{ url('public/js/custom-vue.js') }}"></script>
    <script src="{{ url('public/js/app.js') }}"></script>
</div>
</body>
</html>
