<header id="listar-dashboardheader" class="listar-dashboardheader listar-haslayout">
    <div class="cd-auto-hide-header listar-haslayout">
        <div class="container-fluid">
            <div class="row">
                <strong class="listar-logo"><a href="{{url('/')}}">
                        <img  width="50px" height="50px" class="img-responsive" src="{{asset('front/images/logomartil.png')}}" alt="company logo here">

                    </a></strong>
                <nav class="listar-addnav">
                    <ul>
                        <li>
                            <div class="dropdown listar-dropdown">
                                <a class="listar-userlogin listar-btnuserlogin" href="javascript:void(0);" id="listar-dropdownuser" data-toggle="dropdown">
                                    <span class="fa fa-user-circle"></span>
                                    <em>{{\Illuminate\Support\Facades\Auth::user()->name}}</em>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu listar-dropdownmen" aria-labelledby="listar-dropdownuser">
                                    <ul>
                                        <li>
                                            <a  href="{{url('u/dashboard')}}">
                                                <i class="icon-speedometer2"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="{{url('u/ads')}}">
                                                <i class="icon-layers"></i>
                                                <span>Mes Annonces</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="{{url('u/profile')}}">
                                                <i class="icon-user2"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="icon-lock6"></i>  Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="listar-btn listar-btngreen" href="{{url('u/add-ad')}}">
                                <i class="icon-plus"></i>
                                <span>Add Listing</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav id="listar-nav" class="listar-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#listar-navigation" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="listar-navigation" class="collapse navbar-collapse listar-navigation">
                        <ul>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home v 1</a></li>
                                    <li><a href="indexv2.html">Home v 2</a></li>
                                    <li><a href="indexv3.html">Home v 3</a></li>
                                    <li><a href="indexv4.html">Home v 4</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Explore</a>
                                <ul class="sub-menu">
                                    <li><a href="listingvlist.html">All Listings</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Food</a>
                                        <ul class="sub-menu">
                                            <li><a href="listingv1.html">Cafe</a></li>
                                            <li class="current-menu-item"><a href="listingv2.html">Restaurant</a></li>
                                            <li><a href="listingv1.html">Dinner</a></li>
                                            <li><a href="listingv2.html">Pizza Place</a></li>
                                            <li><a href="listingv1.html">Italian</a></li>
                                            <li><a href="listingv2.html">Bakeries</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Entertainment</a>
                                        <ul class="sub-menu">
                                            <li><a href="listingv1.html">Art &amp; Design</a></li>
                                            <li><a href="listingv2.html">Movie Theater</a></li>
                                            <li><a href="listingv1.html">Theme Parks</a></li>
                                            <li><a href="listingv2.html">Music Life</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Educational</a>
                                        <ul class="sub-menu">
                                            <li><a href="listingv1.html">School</a></li>
                                            <li><a href="listingv2.html">College</a></li>
                                            <li><a href="listingv1.html">University</a></li>
                                            <li><a href="listingv2.html">Short Courses</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Nightlife</a>
                                        <ul class="sub-menu">
                                            <li><a href="listingv1.html">Wine Bars</a></li>
                                            <li><a href="listingv2.html">Pubs</a></li>
                                            <li><a href="listingv1.html">Nightclub</a></li>
                                            <li><a href="listingv2.html">Lounge</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Outdoors</a>
                                        <ul class="sub-menu">
                                            <li><a href="listingv1.html">Boutiques</a></li>
                                            <li><a href="listingv2.html">Fashion</a></li>
                                            <li><a href="listingv1.html">Furniture</a></li>
                                            <li><a href="listingv2.html">Sport Equipment</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="howitwork.html">How It Works</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="pkgprice.html">Packages</a></li>
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="contactus.html">Contact Us</a></li>
                                    <li><a href="404error.html">404 Error</a></li>
                                    <li><a href="comingsoon.html">Coming Sooon</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">News</a>
                                <ul class="sub-menu">
                                    <li><a href="newsv1.html">Blog Standard</a></li>
                                    <li><a href="newsv2.html">Blog Classic</a></li>
                                    <li><a href="newsv3.html">Blog sidebar</a></li>
                                </ul>
                            </li>
                            <li class="current-menu-item"><a href="dashboard.html">Dasboard</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    @include('layouts.partials.front_dashboard.sidebar')

</header>