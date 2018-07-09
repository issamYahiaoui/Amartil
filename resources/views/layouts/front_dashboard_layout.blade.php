<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="shortcut icon" href="http://2.bp.blogspot.com/-bzr9RZlrgKI/Vc1FUbD2cQI/AAAAAAAAAIk/LZkCb1lVfVg/s1600/favicon.jpg">--}}
    {{--<link rel="icon" href="{{asset('front/favicon.png')}}">--}}
    <link rel="icon" href="{{asset('front/images/logomartil.png')}}" alt="homepage">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap-slider.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/chosen.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/morris.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/YouTubePopUp.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/auto-complete.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.navhideshow.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/transitions.css')}}">
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/dbstyle.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/dbresponsive.css')}}">
    @yield('css')


    <script src="{{asset('front/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body class="listar-home listar-homeone">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Preloader Start
*************************************-->
<div class="preloader-outer">
    <div class="pin"></div>
    <div class="pulse"></div>
</div>



<div id="listar-wrapper" class="listar-wrapper listar-haslayout">
    <!--************************************
            Header Start
    *************************************-->
    @include('layouts.partials.front_dashboard.topbar')

<!--************************************
            Header End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="listar-main" class="listar-main listar-haslayout">
        <!--************************************
                Dashboard Banner Start
        *************************************-->
        @include('layouts.partials.front_dashboard.banner')
        <!--************************************
                Dashboard Banner End

                Dashboard Content Start
        *************************************-->
        <div id="listar-content" class="listar-content">
           @yield('content')
        </div>
        <!--************************************
                    Dashboard Content End
        *************************************-->
    </main>
    <!--************************************
                Main End
    *************************************-->
    <!--************************************
                Footer Start
    *************************************-->
   {{--@include('layouts.partials.front_dashboard.footer')--}}
    <!--************************************
                Footer End
    *************************************-->
</div>
<script src="{{asset('front/js/vendor/jquery-library.js')}}"></script>
<script src="{{asset('front/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/mapclustering/data.json')}}"></script>
{{--<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>--}}
<script src="{{asset('front/js/tinymce/tinymce.min.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci')}}"></script>
<script src="{{asset('front/js/mapclustering/markerclusterer.min.js')}}"></script>
<script src="{{asset('front/js/mapclustering/infobox.js')}}"></script>
<script src="{{asset('front/js/mapclustering/map.js')}}"></script>
<script src="{{asset('front/js/ResizeSensor.js.js')}}"></script>
<script src="{{asset('front/js/jquery.sticky-sidebar.js')}}"></script>
<script src="{{asset('front/js/YouTubePopUp.jquery.js')}}"></script>
<script src="{{asset('front/js/jquery.navhideshow.js')}}"></script>
<script src="{{asset('front/js/backgroundstretch.js')}}"></script>
<script src="{{asset('front/js/jquery.sticky-kit.js')}}"></script>
<script src="{{asset('front/js/bootstrap-slider.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/jquery.vide.min.js')}}"></script>
<script src="{{asset('front/JS/auto-complete.js')}}"></script>
<script src="{{asset('front/js/chosen.jquery.js')}}"></script>
<script src="{{asset('front/js/scrollbar.min.js')}}"></script>
<script src="{{asset('front/js/isotope.pkgd.js')}}"></script>
<script src="{{asset('front/js/jquery.steps.js')}}"></script>
<script src="{{asset('front/js/prettyPhoto.js')}}"></script>
<script src="{{asset('front/js/raphael-min.js')}}"></script>
<script src="{{asset('front/js/parallax.js')}}"></script>
<script src="{{asset('front/js/sortable.js')}}"></script>
<script src="{{asset('front/js/countTo.js')}}"></script>
<script src="{{asset('front/js/appear.js')}}"></script>
<script src="{{asset('front/js/gmap3.js')}}"></script>
<script src="{{asset('front/js/dev_themefunction.js')}}"></script>
<script >
    $(document).ready(function() {
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>
@yield('js')
</body>
</html>