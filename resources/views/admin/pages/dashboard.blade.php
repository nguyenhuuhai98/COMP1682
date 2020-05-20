@extends('admin.layouts.app')

@section('title')
    <title>Admin Dashboard</title>
@stop

@section('content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Orders</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Orders</h6>
                                            <h3 class="mb-3 mt-0">87</h3>
                                            <div class="">
                                                <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous month</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-cube-outline display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Revenue</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Revenue</h6>
                                            <h3 class="mb-3 mt-0">$4,675</h3>
                                            <div class="">
                                                <span class="badge badge-light text-danger"> +8% </span> <span class="ml-2">From previous month</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-buffer display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Av. Price</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Average Price</h6>
                                            <h3 class="mb-3 mt-0">15.9</h3>
                                            <div class="">
                                                <span class="badge badge-light text-primary"> 0% </span> <span class="ml-2">From previous month</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-tag-text-outline display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary mini-stat position-relative">
                                <div class="card-body">
                                    <div class="mini-stat-desc">
                                        <h6 class="text-uppercase verti-label text-white-50">Pr. Sold</h6>
                                        <div class="text-white">
                                            <h6 class="text-uppercase mt-0 text-white-50">Product Sold</h6>
                                            <h3 class="mb-3 mt-0">300</h3>
                                            <div class="">
                                                <span class="badge badge-light text-info"> +89% </span> <span class="ml-2">From previous month</span>
                                            </div>
                                        </div>
                                        <div class="mini-stat-icon">
                                            <i class="mdi mdi-briefcase-check display-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    </div>
                </div>
                <!-- end page content-->

            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <footer class="footer">
            © 2020 <span class="d-none d-sm-inline-block">- From HaiNH with Love <i class="mdi mdi-heart text-danger"></i></span>
        </footer>

    </div>
@stop

@section('script')
    <!-- Peity JS -->
    <script src="peity/jquery.peity.min.js"></script>

    <script src="morris/morris.min.js"></script>
    <script src="raphael/raphael-min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script src="pages/dashboard.js"></script>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title:{
                    text: "Sale of year"
                },
                axisY: {
                    title: "Products per month",
                    titleFontColor: "#4F81BC",
                    lineColor: "#4F81BC",
                    labelFontColor: "#4F81BC",
                    tickColor: "#4F81BC"
                },
                axisY2: {
                    title: "Dollars per month",
                    titleFontColor: "#C0504E",
                    lineColor: "#C0504E",
                    labelFontColor: "#C0504E",
                    tickColor: "#C0504E"
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    cursor:"pointer",
                    itemclick: toggleDataSeries
                },
                data: [{
                    type: "column",
                    name: "Products sale",
                    legendText: "Products sale",
                    showInLegend: true,
                    dataPoints:[
                        { label: "Jan", y: 7.1 },
                        { label: "Feb", y: 6.70 },
                        { label: "Mar", y: 5.00 },
                        { label: "Apr", y: 2.50 },
                        { label: "May", y: 2.30 },
                        { label: "Jun", y: 1.80 },
                        { label: "Jul", y: 1.60 },
                        { label: "Aug", y: 1.60 },
                        { label: "Sep", y: 1.80 },
                        { label: "Oct", y: 1.60 },
                        { label: "Nov", y: 1.60 },
                        { label: "Dec", y: 1.60 }
                    ]
                },
                    {
                        type: "column",
                        name: "Dollars",
                        legendText: "Revenue",
                        axisYType: "secondary",
                        showInLegend: true,
                        dataPoints:[
                            { label: "Jan", y: 300 },
                            { label: "Feb", y: 500 },
                            { label: "Mar", y: 800 },
                            { label: "Apr", y: 700 },
                            { label: "May", y: 500 },
                            { label: "Jun", y: 432 },
                            { label: "Jul", y: 2523 },
                            { label: "Aug", y: 342 },
                            { label: "Sep", y: 332 },
                            { label: "Oct", y: 1234 },
                            { label: "Nov", y: 423 },
                            { label: "Dec", y: 342 }
                        ]
                    }]
            });
            chart.render();

            function toggleDataSeries(e) {
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                }
                else {
                    e.dataSeries.visible = true;
                }
                chart.render();
            }

        }
    </script>
@stop
