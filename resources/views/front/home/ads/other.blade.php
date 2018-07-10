@extends('layouts.front_layout')

@section('content')

    <div class="listar-innerbanner" style="background : url({{asset('front/images/parallax/bgparallax-06.jpg')}}) !important ">
        <div class="listar-parallaxcolor listar-innerbannerparallaxcolor">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="listar-innerbannercontent">

                            <div class="listar-pagetitle">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main id="listar-main"  style="background: #FFFFFF" class="listar-main  listar-haslayout">
            <div class="listar-themepost listar-placespost listar-detail listar-detailvone">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="listar-postcontent">
                                <h1>{{$model->ads()->title}}<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h1>
                                <br><br>
                                <div class="listar-reviewcategory">
                                    <div class="">
                                        <h3 style="color:#5c5c5c;">Category name</h3>
                                    </div>

                                </div>
                                <div class="listar-themepostfoot">
                                    <ul>
                                        <li>
                                            <i class="icon-telephone114"></i>
                                            <span>{{$model->ads()->owner_phone}} Phone</span>
                                        </li>
                                        <li>
                                            <i class="icon-icons74"></i>
                                            <span>{{$model->adr}} Address</span>
                                        </li>
                                        <li style="color: gold ; font-size: 22px">
                                            <i class="fa fa-money"></i>
                                            <span>{{$model->price}} Price - <span>{{$model->format_price}}</span></span>
                                        </li>
                                        @if($model->ads()->video_url)
                                            <li>
                                                <i class="icon-global"></i>
                                                <span><a href="{{$model->ads()->video_url}}">Lien de la video</a></span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="listar-themetabs">
                                <ul class="listar-themetabnav" role="tablist">
                                    <li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
                                    <li role="presentation"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
                                    <li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
                                </ul>
                                <div class="tab-content listar-themetabcontent">
                                    <div role="tabpanel" class="tab-pane active listar-overview" id="overview">
                                        <div class="listar-leftbox">
                                            <h3>Description</h3>
                                            <br>
                                            {!!  $model->description !!}
                                            <br> <br>
                                            <figure style="max-height: 315px" class="listar-featuredimg"><span href="detailv1.html">
                                                            @if(count($model->ads()->images()) > 0)
                                                        <img src="{{asset('images/'.$model->ads()->images()[0]->filename)}}" alt="image description" class="mCS_img_loaded">
                                                    @else
                                                        <img  src="{{asset('dashboard/images/prop1.jpeg')}}" alt="image description" class="mCS_img_loaded">
                                                    @endif

                                                        </span></figure>
                                            <br> <br>

                                        </div>
                                        <div class="listar-rightbox">
                                            <div class="listar-amenitiesarea">
                                                <div class="listar-title">
                                                    <h3>Basic Information</h3>
                                                </div>
                                                <div class="infos">
                                                    <div class="row">
                                                        <div class="col-md-6">Titre de l'annonce </div>
                                                        <div class="col-md-6">{{$model->ads()->title}}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">Categorie de l'annonce</div>
                                                        <div class="col-md-6">Categorie</div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-md-6">Phone</div>
                                                        <div class="col-md-6">{{$model->ads()->owner_phone}}</div>
                                                    </div>
                                                    <hr>






                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane listar-addressmaplocation" id="location">
                                        <div class="row">
                                            <div class="">
                                                <div class="form-group row">

                                                    <div class="">
                                                        <input id="searchInput"disabled hidden class="input-controls" type="text" placeholder="Enter a location">
                                                        <div class="map" id="map" style="width: 100%; height: 300px;"></div>
                                                        <div class="form_area">
                                                            <input type="text" name="adr" id="location">
                                                            <input type="text" name="lat" id="lat">
                                                            <input type="text" name="lng" id="lng">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="gallery">
                                        <div id="listar-postgallery" class="listar-postgallery">


                                            @if($model->ads()->images())
                                                @foreach($model->ads()->images() as $img)
                                                    <img src="{{asset('images/'.$img->filename)}}" alt="image description">
                                                    <div class="listar-masnory"><figure><a  data-rel="prettyPhoto[gallery]"><img src="{{asset('images/'.$img->filename)}}" alt="image description"></a></figure></div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    <style>
        /*.listar-header {*/
        /*z-index: 100;*/
        /*padding: 15px 0;*/
        /*background: #fff !important;*/
        /*position: relative;*/
        /*text-align: center;*/
        /*-webkit-box-shadow: 0 0 15px 0 rgba(0,0,0,0.10);*/
        /*box-shadow: 0 0 15px 0 rgba(0,0,0,0.10);*/
        /*}*/
        /*.nav-black > li > a{color: #222 !important;}*/
        .listar-formsearchlisting .form-group {
            margin: 0;
            float: left;
            width: 33.33% !important;
        }
        @media (max-width: 800px){
            .listar-formsearchlisting .form-group {
                border: 0;
                padding: 0;
                width: 100% !important;
            }
        }
        .infos div{


            padding: 5px;
        }
        .info div .row {
            display: flex;
            justify-content: space-between;
        }

    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCis4vluMHt3WRX1tQlC4955sbgzNSbEnc&libraries=places"
            async defer></script>
    <style type="text/css">
        .input-controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }
        #searchInput {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 50%;
        }
        #searchInput:focus {
            border-color: #4d90fe;
        }
    </style>

@endsection

@section('js')
    <script>
        /* script */
        function initialize() {
            document.getElementById('location').value ='{{$model->adr}}';
            document.getElementById('lat').value = '{{$model->lat}}';
            document.getElementById('lng').value = '{{$model->lng}}';
            var latlng = new google.maps.LatLng('{{$model->lat}}',{{$model->lng}});
            var map = new google.maps.Map(document.getElementById('map'), {
                center: latlng,
                zoom: 13
            });
            var marker = new google.maps.Marker({
                map: map,
                position: latlng,
                draggable: true,
                anchorPoint: new google.maps.Point(0, -29)
            });
            var input = document.getElementById('searchInput');
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            var geocoder = new google.maps.Geocoder();
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);
            var infowindow = new google.maps.InfoWindow();
            autocomplete.addListener('place_changed', function() {
                infowindow.close();
                marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }

                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                bindDataToForm(place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());
                infowindow.setContent(place.formatted_address);
                infowindow.open(map, marker);

            });
            // this function will work on marker move event into map
            google.maps.event.addListener(marker, 'dragend', function() {
                geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[0]) {
                            bindDataToForm(results[0].formatted_address,marker.getPosition().lat(),marker.getPosition().lng());
                            infowindow.setContent(results[0].formatted_address);
                            infowindow.open(map, marker);
                        }
                    }
                });
            });
        }
        function bindDataToForm(address,lat,lng){
            document.getElementById('location').value = address;
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
        }
        console.log('google map is on')
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection