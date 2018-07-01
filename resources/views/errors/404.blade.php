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
    <link rel="icon" type="image/png" sizes="16x16" src="{{asset('dashboard/images/logo-icon.png')}}">
    <title>V360 PRO</title>
    <!-- Custom CSS -->
    <link href="{{asset('dashboard/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/pages/error-pages.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    @yield('css')
</head>

<body class="skin-blue fixed-layout">

<section id="wrapper" class="error-page">
    <div class="error-box">
        <div class="error-body text-center">
            <h1>404</h1>
            <h3 class="text-uppercase">Page Not Found !</h3>
            <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND YOUR WAY HOME</p>
            <a href="{{url('/')}}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a> </div>

    </div>
</section>



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
<!--Custom JavaScript -->
<script src="{{asset('dashboard/js/custom.min.js')}}"></script>
<script src="{{asset('node_modules/sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('node_modules/sweetalert/jquery.sweet-alert.custom.js')}}"></script>

@yield('js')

</body>

</html>