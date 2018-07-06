<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    {{--<link rel="shortcut icon" href="http://2.bp.blogspot.com/-bzr9RZlrgKI/Vc1FUbD2cQI/AAAAAAAAAIk/LZkCb1lVfVg/s1600/favicon.jpg">--}}
    <link rel="icon" href="{{asset('front/images/logomartil.png')}}" alt="homepage">

    {{--<link rel="icon" type="image/png" sizes="16x16" src="{{asset('dashboard/images/logo-icon.png')}}">--}}
    <title>Amartli</title>
    <!-- Custom CSS -->
    <link href="{{asset('dashboard/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/node_modules/dropzone-master/dist/dropzone.css')}}" rel="stylesheet">


    <link href="{{asset('dashboard/node_modules/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    @yield('css')
</head>

<body class="skin-blue fixed-layout">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Amartli</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
@include('layouts.partials.dashboard.topbar')

<!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->

@include('layouts.partials.dashboard.sidebar')


<!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
    @include('layouts.partials.dashboard.header')
    <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            @yield('grey-content')
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->


    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2018 amartli
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('dashboard/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('dashboard/node_modules/popper/popper.min.js')}}"></script>
<script src="{{asset('dashboard/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{asset('dashboard/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('dashboard/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('dashboard/js/sidebarmenu.js')}}"></script>
<!--stickey kit -->
<script src="{{asset('dashboard/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
<script src="{{asset('dashboard/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('dashboard/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('dashboard/node_modules/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{asset('dashboard/node_modules/dropzone-master/dist/dropzone.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('dashboard/js/custom.min.js')}}"></script>

@yield('js')

</body>

</html>