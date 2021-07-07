<template>
    <div class="row analysis px-3">
        <div class="bg-white col-md-8 column-chart shadow-sm rounded pb-0">
            <div class="chart-filter">
                <ul>
                    <li>Thống kê theo</li>
                    <li><a href="">Ngày</a></li>
                    <li><a href="">Tuần</a></li>
                    <li><a href="" class="active">Tháng</a></li>
                    <li><a href="">Năm</a></li>
                </ul>
            </div>
            <div id="chart" class="mt-5">
                <apexchart type=bar height=350 width="100%" :options="chartOptions" :series="series" />
            </div>
        </div>
        <div class="col-md-4 pr-0">
            <div class="card">
                <div class="card-body text-white" style="background-image: linear-gradient(45deg,#f39c12 0,#e91e63 100%);">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <h4 class=" mb-2 text-white">Tổng khách hàng</h4>
                            <div class="text-light font-13">From 14.12 - 21.12</div>
                        </div>
                    </div>
                    <div class="flexbox mb-2">
                        <div class="font-size-25 mb-0">+620</div>
                        <span class="text-white font-18 "><i class="ti-arrow-top-right mr-2"></i>24.05%</span>
                    </div>
                    <!--<div class="text-light">AVG. order value - $54</div>-->
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <h4 class=" mb-2">Khách hàng mới</h4>
                            <div class="text-muted font-13">From 14.12 - 21.12</div>
                        </div>
                    </div>
                    <div class="flexbox mb-2">
                        <div class="font-size-25 mb-0">+420</div><span class="text-success font-18"><i class="ti-arrow-top-right mr-2"></i>24.05%</span>
                    </div>
                    <!--<div class="text-muted">+34% more then last week</div>-->
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <h4 class="mb-2">Khách hàng quen</h4>
                            <div class="text-muted font-13">From 14.12 - 21.12</div>
                        </div>
                    </div>
                    <div class="flexbox mb-2">
                        <div class="font-size-25 mb-0">+200</div><span class="text-success font-18"><i class="ti-arrow-top-right mr-2"></i>24.05%</span>
                    </div>
                    <!--<div class="text-muted">+34% more then last week</div>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                series: [{
                    name: 'Khách quen',
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                }, {
                    name: 'Khách mới',
                    data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
                }, {
                    name: 'Tổng',
                    data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                }],
                chartOptions: {
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            endingShape: 'rounded',
                            columnWidth: '55%',
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },

                    xaxis: {
                        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                    },
                    yaxis: {
                        title: {
                            text: 'Người'
                        }
                    },
                    fill: {
                        opacity: 1

                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return  val + " khách"
                            }
                        }
                    }
                }
            }
        },
    };
</script>