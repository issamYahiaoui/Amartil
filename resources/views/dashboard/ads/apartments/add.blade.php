@extends('layouts.dashboard_layout')


@section('content')
    <div class=" ">
        @if(count($errors->all())>0)
            <div class="alert alert-danger text-center col-md-12 ">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-minus"></i></span>
                </button>
                <ul class="list-unstyled text-center">
                    @foreach($errors->all() as $error)
                        <li class="text-center">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('success'))
            <div id="alert" class="alert alert-success text-center col-md-12">

                {{Session::get('success')}}
                <span class="pull-right" data-dismiss="alert" aria-label="Close" aria-hidden="true"><i
                            class="fa fa-minus"></i></span>
            </div>
        @endif
        <div class="col-md-12">
            <div class="card card-body">
                <div class="row ">
                    <div class="col-md-3">
                        <a href="{{url('ads/')}}"  class="btn btn-outline-info waves-effect waves-light"><i class="fa fa-arrow-circle-left"></i> Back to ads List</a>
                    </div>
                </div>

                <div class="row col-md-11 justify-content-center">
                    <h3 class="box-title m-b-0">Add New Apartment Ads</h3>
                    <br><br><br> <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">

                    <div class="card-body">

                        <form enctype="multipart/form-data" method="POST" action="{{ url('apartments') }}" class="form-horizontal">

                            @csrf


                            <div class="form-body">
                                <h3 class="box-title">Basic Information</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Listing Title</label>
                                            <div class="col-md-9">
                                                <input name="title" type="text" class="form-control" placeholder="">
                                                <small class="form-control-feedback">  </small> </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Video Url</label>
                                            <div class="col-md-9">
                                                <input name="video_url" type="text" class="form-control" placeholder="">
                                                <small class="form-control-feedback"> </small> </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">

                                    <!--/span-->

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Owner Phone </label>
                                            <div class="col-md-9">
                                                <input type="number" name="owner_phone" class="form-control" placeholder="">

                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">What would you like to do  </label>
                                            <div class="col-md-6">
                                                <select id="intention" class="form-control" name="intention" id="">
                                                    <option value="">Choose ...</option>
                                                    <option value="To Sale">To Sale</option>
                                                    <option value="To Rent">To Rent</option>
                                                    <option value="Looking for property">Looking for property</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div id="conditional_div" class="">

                                    <h3 class="box-title"></h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Full Address</label>
                                                <div class="col-md-9">
                                                    <input id="searchInput"  class="input-controls" type="text" placeholder="Enter a location">
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

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Are you the real owner </label>
                                                <div class="col-md-6">
                                                    <select id="is_owner" class="form-control" name="is_owner" id="">
                                                        <option value="">Choose ...</option>
                                                        <option value="Yes , i'm the owner">Yes , i'm the owner</option>
                                                        <option value="No  , i'm an agent">No  , i'm an agent</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div  id="other" class="col-md-6 " >
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Other :</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="type_owner" class="form-control" placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Zip / Postal code</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="zip" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Property type</label>
                                                <div class="col-md-6">
                                                    <select id="property_type" class="form-control" name="property_type" id="">
                                                        <option value="">Choose ...</option>
                                                        <option value="Apartment">Apartment</option>
                                                        <option value="Houses and villas">Houses and villas</option>
                                                        <option value="Land and farms">Land and farms</option>
                                                        <option value="Shops and businesses">Shops and businesses</option>
                                                        <option value="Offices and trays">Offices and trays</option>
                                                        <option value="Industrial premises">Industrial premises</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div id="property_type_condition" class="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Rooms</label>
                                                    <div class="col-md-9">
                                                        <input type="number" name="rooms" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">bathrooms</label>
                                                    <div class="col-md-9">
                                                        <input type="number" name="bathrooms" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Flour</label>
                                                    <div class="col-md-9">
                                                        <select id="flour" class="form-control" name="flour" id="">
                                                            <option value="">Choose ...</option>
                                                            <option value="1 Er">1 Er</option>
                                                            <option value="2 Er">2 Er</option>
                                                            <option value="3 Er">3 Er</option>
                                                            <option value="4 Er">4 Er</option>
                                                            <option value="5 Er">5 Er</option>
                                                            <option value="6 Er">6 Er</option>
                                                            <option value="+7 Er">+7 Er</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Bedrooms</label>
                                                    <div class="col-md-9">
                                                        <input type="number" name="bedrooms" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Total area (m^2)</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="total_area" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Additional information</label>
                                                <div class="col-md-9">
                                                    <textarea name="additional_details" type="text" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Format Price</label>
                                                <div class="col-md-9">
                                                    <select id="format_price" class="form-control" name="format_price" id="">
                                                        <option value="">Choose ...</option>
                                                        <option value="fix">Fix</option>
                                                        <option value="negociable">Negociable</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Price</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="price" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Year built</label>
                                                <div class="col-md-9">
                                                    <select id="year_built" class="form-control" name="year_built" >
                                                        <option value="">Choose ...</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="...">...</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Price per meter</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="price_meter" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <!--/row-->
                                </div>
                                <hr>
                                </div>

                            <div id="description" class="row">
                                <div class="">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Description</label>
                                        <div class="col-md-9">
                                            <textarea id="descriptiontextarea" name="description" type="text" class="form-control" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="" id="imgs">
                                <h3 class="box-title"></h3>
                                <hr class="m-t-0 m-b-40">

                                <div class="row">

                                    <input name="files[]" type="file" class="form-control" multiple hidden >
                                    <button id="triggerFile" type="button" class="btn btn-outline-info btn-rounded"><i class="fa fa-file-photo-o"></i> Upload Images</button>

                                </div>
                                <br> <br>

                                <div id="result" class=" "   >

                                </div>
                                <br> <br>
                            </div>

                            <br> <br>
                            <br> <br>
                            <div class="form-actions row justify-content-center">


                                            <div class="">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <button type="button" class="btn btn-inverse">Cancel</button>
                                            </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')



    <script src="{{asset('js/apartment/add.js')}}"></script>

    <script>
        /* script */
        function initialize() {
            var latlng = new google.maps.LatLng(28.5355161,77.39102649999995);
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


@section('css')
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
    <style>
        img {
            max-width: 100%;
            height: auto;
        }

        .preview-item{
            max-width: 120px;
            max-height: 120px;

            float: left;
            margin: 3px;
            padding: 3px;
        }
    </style>
@endsection