@extends('layouts.master')
@section('title', 'Events')
@section('content')
    <div class="page-container custom-page-container">
        @include('shared.quick-view')
        <div class="main-content" id="vue">
            <div class="container-fluid">
                <div class="page-header">
                    <h2 class="header-title">Thống kê khách hàng</h2>
                    <div class="header-sub-title float-right">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="{{ route('home') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Trang chủ</a>
                            <span class="breadcrumb-item active">Thống kê khách hàng</span>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="">
                <div id="reportrange"  style="">
                    <i class="fa fa-calendar"></i>&nbsp;
                    <span></span> <i class="fa fa-caret-down"></i>
                </div>
                <analysis></analysis>
            </div>
        </div>
        @include('shared.footer')
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                locale: {
                    "format": "MM/DD/YYYY",
                    "separator": " - ",
                    "applyLabel": "Lọc",
                    "cancelLabel": "Xóa",
                    "fromLabel": "Từ",
                    "toLabel": "Đến",
                    "customRangeLabel": "Tùy chọn",
                    "weekLabel": "W",
                    "daysOfWeek": [
                        "Hai",
                        "Ba",
                        "Tư",
                        "Năm",
                        "Sáu",
                        "Bảy",
                        "Chủ nhật"
                    ],
                    "monthNames": [
                        "Tháng 1",
                        "Tháng 2",
                        "Tháng 3",
                        "Tháng 4",
                        "Tháng 5",
                        "Tháng 6",
                        "Tháng 7",
                        "Tháng 8",
                        "Tháng 9",
                        "Tháng 10",
                        "Tháng 11",
                        "Tháng 12"
                    ]
                },
                startDate: start,
                endDate: end,
                ranges: {
                    'Hôm nay': [moment(), moment()],
                    'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 ngày gần đây': [moment().subtract(6, 'days'), moment()],
                    '30 ngày gần đây': [moment().subtract(29, 'days'), moment()],
                    'Tháng này': [moment().startOf('month'), moment().endOf('month')],
                    'Tháng trước': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

        });
    </script>
    @endsection
