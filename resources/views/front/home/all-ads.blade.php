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
                                        <form class="listar-formtheme listar-formsearchlisting">
                                            <fieldset>
                                                {{--<div class="form-group listar-inputwithicon">--}}
                                                    {{--<i class="icon-layers"></i>--}}
                                                    {{--<div class="listar-select">--}}
                                                        {{--<select id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown" style="display: none;">--}}
                                                            {{--<option>Ex: Food, Retail, hotel, cinema</option>--}}
                                                            {{--<option class="icon-entertainment">Art &amp; Entertainment</option>--}}
                                                            {{--<option class="icon-spa">Beauty &amp; Health</option>--}}
                                                            {{--<option class="icon-education">Education</option>--}}
                                                            {{--<option class="icon-healthfitness">Fitness</option>--}}
                                                            {{--<option class="icon-tourism">Hotels</option>--}}
                                                            {{--<option class="icon-localservice">Motor Mechanic</option>--}}
                                                            {{--<option class="icon-nightlife">Night Life</option>--}}
                                                            {{--<option class="icon-foods">Restaurant</option>--}}
                                                            {{--<option class="icon-museum">Real Estate</option>--}}
                                                            {{--<option class="icon-shopping">Shopping</option>--}}
                                                        {{--</select>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group listar-inputwithicon">--}}
                                                    {{--<i class="icon-global"></i>--}}
                                                    {{--<div class="listar-select listar-selectlocation">--}}
                                                        {{--<select id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown" style="display: none;">--}}
                                                            {{--<option>Choose a Location</option>--}}
                                                            {{--<option>Lahore</option>--}}
                                                            {{--<option>Bayonne</option>--}}
                                                            {{--<option>Greenville</option>--}}
                                                            {{--<option>Manhattan</option>--}}
                                                            {{--<option>Queens</option>--}}
                                                            {{--<option>The Heights</option>--}}
                                                        {{--</select>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                <div class="form-group listar-inputwithicon">
                                                    <i class=""><img src="images/icons/icon-01.png" alt="image description"></i>
                                                    <p>Price: </p>
                                                    <div class="slider slider-horizontal" id="ex1Slider"><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 54.8833%;"></div><div class="slider-track-high" style="right: 0px; width: 45.1167%;"></div></div><div class="tooltip tooltip-main top in" role="presentation" style="left: 54.8833%; margin-left: -44px;"><div class="tooltip-arrow"></div><div class="tooltip-inner">$65860</div></div><div class="tooltip tooltip-min top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="tooltip tooltip-max top" role="presentation" style="display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div><div class="slider-handle min-slider-handle round" role="slider" aria-valuemin="0" aria-valuemax="120000" aria-valuenow="65860" aria-valuetext="$65860" style="left: 54.8833%;" tabindex="0"></div><div class="slider-handle max-slider-handle round hide" role="slider" aria-valuemin="0" aria-valuemax="120000" aria-valuenow="0" aria-valuetext="$0" tabindex="0" style="left: 0%;"></div></div><input id="listar-rangeslider" class="listar-rangeslider" data-slider-id="ex1Slider" type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" data-value="65860" value="65860" style="display: none;">
                                                </div>
                                                <button type="button" class="listar-btn listar-btngreen">Search Places</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="listar-themeposts listar-placesposts listar-listview">
                                    <div class="row ">
                                        @foreach(\App\Ads::all() as $ad)
                                            <div class="col-md-offset-1 col-md-10">
                                                <div class="listar-themepost listar-placespost">
                                                    <figure style="max-height: 315px" class="listar-featuredimg"><span href="detailv1.html"><img src="{{asset('front/images/post/img-13.jpg')}}" alt="image description" class="mCS_img_loaded"></span></figure>
                                                    <div class="listar-postcontent" >
                                                        <h3><a href="detailv2.html">{{$ad->title}}</a></h3>
                                                        <div class="listar-description" style="min-height: 170px">
                                                            <p> {{$ad->apartment() ? $ad->apartment()->description : $ad->car()? $ad->car()->description : "Description"}} </p>
                                                            <p> {{$ad->apartment() ? $ad->apartment()->description : $ad->car()? $ad->car()->description : "Description"}} </p>
                                                            <p> {{$ad->apartment() ? $ad->apartment()->description : $ad->car()? $ad->car()->description : "Description"}} </p>
                                                            <p> {{$ad->apartment() ? $ad->apartment()->description : $ad->car()? $ad->car()->description : "Description"}} </p>
                                                        </div>
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
                                            </div>

                                        @endforeach
                                    </div>






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


</main>


@endsection


