@extends('layouts.front_layout')

@section('content')

<main class="" style=" padding-top: 10%">
    <div id="listar-wrapper" class="listar-wrapper listar-haslayout">

        <main id="listar-main" class="listar-main listar-haslayout">
            <div id="listar-content" class="listar-content"  >
                <div class="listar-listing" >

                    <div class="container "  >
                        <div class="row">
                            <div class="listar-listingarea">
                                <div class="listar-innerpagesearch">
                                    <div class="listar-innersearch">
                                        <div class="listar-searchstatus"><h1><span>Results For</span> Food &amp; Drinks Listings</h1></div>
                                        <form onsubmit="$('#hero-demo').blur();return false;" class="listar-formtheme listar-formsearchlisting">
                                            <fieldset>
                                                <div class="form-group listar-inputwithicon">
                                                    <i class="icon-icons185"></i>
                                                    <input type="text" name="q" id="listar-autosearch" class="form-control" placeholder="What are you looking for ?">
                                                </div>
                                                <div class="form-group listar-inputwithicon">
                                                    <i class="icon-global"></i>
                                                    <div class="listar-select listar-selectlocation">
                                                        <select id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">
                                                            <option>All Locations</option>
                                                            <option>Lahore</option>
                                                            <option>Bayonne</option>
                                                            <option>Greenville</option>
                                                            <option>Manhattan</option>
                                                            <option>Queens</option>
                                                            <option>The Heights</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group listar-inputwithicon">
                                                    <i class="icon-layers"></i>
                                                    <div class="listar-select listar-selectlocation">
                                                        <select id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
                                                            <option>All Categories</option>
                                                            <option class="icon-entertainment">Art &amp; Entertainment</option>
                                                            <option class="icon-shopping">Beauty &amp; Health</option>
                                                            <option class="icon-study">Education</option>
                                                            <option class="icon-healthfitness">Fitness</option>
                                                            <option class="icon-icons240">Hotels</option>
                                                            <option class="icon-localservice">Motor Mechanic</option>
                                                            <option class="icon-nightlife">Night Life</option>
                                                            <option class="icon-tourism">Restaurant</option>
                                                            <option class="icon-shopping">Real Estate</option>
                                                            <option class="icon-shopping">Shopping</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <br> <br>
                                            <button type="button" class="listar-btn listar-btngreen">Submit Result</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="listar-themeposts listar-placesposts listar-listview">


                                    @foreach(\App\Ads::all() as $ad)
                                        <div class="listar-themepost listar-placespost">
                                            <figure class="listar-featuredimg"><a href="detailv1.html"><img src="{{asset('front/images/post/img-13.jpg')}}" alt="image description" class="mCS_img_loaded"></a></figure>
                                            <div class="listar-postcontent">
                                                <h3><a href="detailv2.html">{{$ad->title}}</a></h3>

                                                <div class="listar-reviewcategory">
                                                    <div class="listar-review">
                                                        {{$ad->category()? $ad->category()->name : "Category Name" }}
                                                    </div>
                                                    <a href="listingv1.html" class="listar-category">
                                                        <i class="icon-coin-dollar"></i>
                                                        <span>{{$ad->apartment() ? $ad->apartment()->price : $ad->car()? $ad->car()->price : "Price"}}</span>
                                                    </a>
                                                </div>
                                                <div class="listar-themepostfoot">
                                                    <a class="listar-location" href="javascript:void(0);">
                                                        <i class="icon-icons74"></i>
                                                        <em>{{$ad->apartment() ? $ad->apartment()->adr : $ad->car() ? $ad->car()->adr : "Address"}}</em>
                                                    </a>
                                                    <div class="listar-postbtns">
                                                        <a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
                                                        <a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
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
                                    @endforeach



                                    <nav class="listar-pagination">
                                        <ul>
                                            <li class="listar-prevpage"><a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="listar-active"><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li class="listar-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>

    <div class="modal fade listar-placequickview" tabindex="-1" role="dialog">
        <div class="modal-dialog listar-modaldialog" role="document">
            <div class="modal-content listar-modalcontent">
                <div class="listar-themepost listar-placespost">
                    <span class="listar-btnclosequickview" data-toggle="modal" data-target=".listar-placequickview">X</span>
                    <figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg" data-vide-options="position: 50% 50%">
						<span class="listar-contactnumber">
							<i class="icon-"><img src="images/icons/icon-03.png" alt="image description"></i>
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
</main>


@endsection
