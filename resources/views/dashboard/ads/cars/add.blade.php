@extends('layouts.dashboard_layout')


@section('content')
    <div class=" ">
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
                    <h3 class="box-title m-b-0">Add New Car Ads</h3>
                    <br><br><br> <br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">

                    <div class="card-body">
                        <form enctype="multipart/form-data"  method="POST" action="{{ url('cars') }}"class="form-horizontal">
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
                                            <label class="control-label text-right col-md-3">Car model</label>
                                            <div class="col-md-9">
                                                <input name="car_model" type="text" class="form-control" placeholder="">
                                                <small class="form-control-feedback">  </small> </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Model</label>
                                            <div class="col-md-9">
                                                <input name="model" type="text" class="form-control" placeholder="">
                                                <small class="form-control-feedback"> </small> </div>
                                        </div>
                                    </div>
                                    <!--/span-->
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
                                                <div class="col-md-9">
                                                    <select id="is_owner" class="form-control" name="is_owner" id="">
                                                        <option value="">Choose ...</option>
                                                        <option value="Yes , i'm the owner">Yes , i'm the owner</option>
                                                        <option value="No  , i'm an agent">No  , i'm a broker</option>
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
                                                <label class="control-label text-right col-md-3">safety</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="safety" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Fuel Type</label>
                                                <div class="col-md-9">
                                                    <select id="fuel_type" class="form-control" name="fuel_type" id="">
                                                        <option value="">Choose ...</option>
                                                        <option value="diesel">diesel</option>
                                                        <option value="essence">essence</option>
                                                        <option value="electric">electric</option>
                                                        <option value="LPG">LPG</option>
                                                        <option value="Bi-Fuel">Bi-Fuel</option>
                                                        <option value="CNG">CNG</option>
                                                        <option value="Gasoline">Gasoline</option>
                                                        <option value="Hybrid-Electric">Hybrid-Electric</option>
                                                        <option value="Biodiesel">Biodiesel</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Mileage</label>
                                                <div class="col-md-9">
                                                    <select id="mileage" class="form-control" name="mileage" id="">
                                                        <option value="">Choose ...</option>
                                                        <option value="0 - 4 999 km">0 - 4 999 km</option>
                                                        <option value="5000 - 9 999 km">5000 - 10 000 - 39 999 km</option>
                                                        <option value="10 000 - 39 999 km">10 000 - 39 999 km</option>
                                                        <option value="40 000 - 99 999 km">40 000 - 99 999 km</option>
                                                        <option value="100 000 - 299 999 km">100 000 - 299 999 km</option>
                                                        <option value="300 000 - 499 999 km">300 000 - 499 999 km</option>
                                                        <option value="more than 500 000 km">more than 500 000 km</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Year</label>
                                                <div class="col-md-9">
                                                    <select id="year" class="form-control" name="year" >
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
                                                <label class="control-label text-right col-md-3">Fiscal power</label>
                                                <div class="col-md-9">
                                                    <input name="fiscal_power" type="text" class="form-control" placeholder=""/>
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


                                    <!--/row-->
                                </div>
                                <hr>
                            </div>

                            <div  class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Color</label>
                                        <div class="col-md-9">
                                            <input name="color" type="text" class="form-control" placeholder=""/>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Number of cylinders</label>
                                        <div class="col-md-9">
                                            <select id="nbr_cylindre" class="form-control" name="nbr_cylindre" >
                                                <option value="">Choose ...</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="8">8</option>
                                                <option value="10">10</option>
                                                <option value="12">12</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div id="description" class="row">

                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-2">Description</label>
                                            <div class="col-md-10">
                                                <textarea id="descriptiontextarea" name="description" type="text" class="form-control" placeholder=""></textarea>
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

                                <div id="result" class=""  >

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

   <script src="{{asset('js/car/add.js')}}"></script>

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