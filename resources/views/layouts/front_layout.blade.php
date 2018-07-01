<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BootStrap HTML5 CSS3 Theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('front/favicon.png')}}">
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
    <link rel="stylesheet" href="{{asset('front/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
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
<!--************************************
        Preloader End
*************************************-->
<!--************************************
        Wrapper Start
*************************************-->
<div id="listar-wrapper" class="listar-wrapper listar-haslayout">
    <!--************************************
            Header Start
    *************************************-->
   @include('layouts.partials.front.header')
    <!--************************************
            Header End
    *************************************-->
    <!--************************************
            Home Slider Start
    *************************************-->
   @include('layouts.partials.front.bannerslider')
    <!--************************************
            Home Slider End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="listar-main" class="listar-main listar-haslayout">
        <!--************************************
                Explore The City Start
        *************************************-->
      @include('layouts.partials.front.explorecities')
        <!--************************************
                Explore The City End
        *************************************-->
        <!--************************************
                Best Theme Video Start
        *************************************-->
        @include('layouts.partials.front.parallex1')
        <!--************************************
                Best Theme Video End
        *************************************-->
        <!--************************************
                Theme Features Start
        *************************************-->
       @include('layouts.partials.front.goals')
        <!--************************************
                Theme Features End
        *************************************-->
        <!--************************************
                Explore The City Start
        *************************************-->
      @include('layouts.partials.front.categories')
        <!--************************************
                Explore The City End
        *************************************-->
        <!--************************************
                Discover New Places Start
        *************************************-->
     @include('layouts.partials.front.places')
        <!--************************************
                Discover New Places End
        *************************************-->
        <!--************************************
                Add Listing Start
        *************************************-->
        @include('layouts.partials.front.parallex2')
        <!--************************************
                Add Listing End
        *************************************-->
        <!--************************************
                Blog Post Start
        *************************************-->
       @include('layouts.partials.front.posts')
        <!--************************************
                Blog Post End
        *************************************-->
        <!--************************************
                Testimonials Start
        *************************************-->
       @include('layouts.partials.front.feedback')
        <!--************************************
                Testimonials End
        *************************************-->
        <!--************************************
                Three Columns Start
        *************************************-->
        @include('layouts.partials.front.newsletter')
        <!--************************************
                Three Columns End
        *************************************-->
    </main>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
            Footer Start
    *************************************-->
    @include('layouts.partials.front.footer')
    <!--************************************
            Footer End
    *************************************-->
</div>
<!--************************************
        Wrapper End
*************************************-->
<!--************************************
        Theme Modal Box Start
*************************************-->
<div class="modal fade listar-placequickview" tabindex="-1" role="dialog">
    <div class="modal-dialog listar-modaldialog" role="document">
        <div class="modal-content listar-modalcontent">
            <div class="listar-themepost listar-placespost">
                <span class="listar-btnclosequickview" data-toggle="modal" data-target=".listar-placequickview">X</span>
                <figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg')}}" data-vide-options="position: 50% 50%">
						<span class="listar-contactnumber">
							<i class="icon-"><img src="{{asset('front/images/icons/icon-03.png')}}" alt="image description"></i>
							<em> + 7890 456 133</em>
						</span>
                </figure>
                <div class="listar-postcontent">
                    <h3><a href="javascript:void(0);">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i></h3>
                    <div class="listar-description">
                        <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit Nam in mauris quis libero sodales eleifend amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus</p>
                    </div>
                    <ul class="listar-listfeatures">
                        <li>Pets allowed</li>
                        <li>Kitchen</li>
                        <li>Internet</li>
                        <li>Suitable for events</li>
                        <li>Gym</li>
                        <li>Dryer</li>
                        <li>Hot tub</li>
                        <li>Family/kid friendly</li>
                        <li>Wireless Internet</li>
                    </ul>
                    <div class="listar-reviewcategory">
                        <div class="listar-review">
                            <span class="listar-stars"><span></span></span>
                            <em>(3 Review)</em>
                        </div>
                        <a href="javascript:void(0);" class="listar-category">
                            <i class="icon-tourism"></i>
                            <span>Hotel</span>
                        </a>
                    </div>
                    <div class="listar-themepostfoot">
							<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Today <span class="listar-greenthemecolor">Open Now</span> 10:00 AM - 5:00 PM</em>
							</span>
                        <div class="listar-postbtns">
                            <a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
                            <div class="listar-btnquickinfo">
                                <div class="listar-shareicons">
                                    <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                                <a class="listar-btnshare" href="javascript:void(0);">
                                    <i class="icon-share3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Theme Modal Box End
*************************************-->
<!--************************************
        Login Singup Start
*************************************-->
@include('front.auth.auth')
<!--************************************
        Login Singup End
*************************************-->
<script src="{{asset('front/js/vendor/jquery-library.js')}}"></script>
<script src="{{asset('front/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/mapclustering/data.json')}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
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
</body>
</html>