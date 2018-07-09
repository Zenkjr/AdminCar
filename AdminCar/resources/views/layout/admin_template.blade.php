<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/images/favicon.png')}}">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="{{asset('/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    {{-- table link css --}}
    <link rel="stylesheet" type="text/css" href="{{asset('/extra-libs/multicheck/multicheck.css')}}">
    <link href="{{asset('/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
{{--    <link href="{{asset('/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">--}}

{{--<link rel="stylesheet" type="text/css" href="{{asset('/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">--}}

    <!-- Custom CSS -->
    <link href="{{asset('/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('layout.admin_header')

    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    @include('layout.admin_siderbar')

    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            @yield('content')
        <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        @include('layout.admin_footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{{asset('/libs/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('/extra-libs/sparkline/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('/js/custom.min.js')}}"></script>
<!--This page JavaScript -->
<!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
{{--<script src="{{asset('/js/pages/dashboards/dashboard1.js')}}"></script>--}}

{{-- table multicheck --}}
<script src="{{asset('/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
<script src="{{asset('/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
<script src="{{asset('/extra-libs/DataTables/datatables.min.js')}}"></script>


<!-- Charts js Files -->
{{--<script src="{{asset('/libs/flot/excanvas.js')}}"></script>--}}
{{--<script src="{{asset('/libs/flot/jquery.flot.js')}}"></script>--}}
{{--<script src="{{asset('/libs/flot/jquery.flot.pie.js')}}"></script>--}}
{{--<script src="{{asset('/libs/flot/jquery.flot.time.js')}}"></script>--}}
{{--<script src="{{asset('/libs/flot/jquery.flot.stack.js')}}"></script>--}}
{{--<script src="{{asset('/libs/flot/jquery.flot.crosshair.js')}}"></script>--}}
{{--<script src="{{asset('/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>--}}
{{--<script src="{{asset('/js/pages/chart/chart-page-init.js')}}"></script>--}}
@yield('script')

</body>

</html>