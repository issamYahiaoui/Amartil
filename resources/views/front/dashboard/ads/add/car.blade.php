@extends('layouts.front_dashboard_layout')

@section('content')



    <div id="listar-content" class="listar-content">




        <div id="listar-content" class="listar-content">
            <form  enctype="multipart/form-data" class="listar-formtheme listar-formaddlisting" method="POST" action="{{url('cars')}}">
                @csrf
                <div id="listar-addlistingsteps" class="listar-addlistingsteps">
                    <div class="listar-steptitle"><em>Basic Information</em></div>
                    <section>
                        <fieldset>
                            <div class="listar-boxtitle">
                                <h3>Basic Information</h3>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group listar-dashboardfield">
                                        <label>Titre de l'annonce</label>
                                        <input type="text" name="title" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group listar-dashboardfield">
                                        <label>Lien Video <span>(Viemo or Youtube)</span></label>
                                        <input type="url" name="video_url" class="form-control" placeholder="//:http">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" id="description">
                                    <div class="form-group listar-dashboardfield">
                                        <label>Description</label>
                                        <div class="clearfix"></div>
                                        <textarea id="listar-tinymceeditor" class="listar-tinymceeditor"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group listar-dashboardfield">
                                        <label>Mobile</label>
                                        <input type="text" name="owner_phone" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group listar-dashboardfield">
                                        <label>Modele du vehicule</label>
                                        <input type="text" name="car_model" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group listar-dashboardfield">
                                        <label>Vehicule</label>
                                        <input type="text" name="car" class="form-control" placeholder="">
                                    </div>
                                </div>




                            </div>
                        </fieldset>
                    </section>


                    <div class="  listar-steptitle"><em>Location</em></div>

                    <section>
                        <div class="conditional_div">

                            <fieldset>
                                <div class="listar-boxtitle">
                                    <h3>Location</h3>
                                </div>
                                <div class="row">
                                    <div class="">
                                        <label class="control-label text-right ">Full Address</label>
                                        <div class="form-group row">

                                            <div class="col-md-12">
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
                            </fieldset>
                        </div>
                    </section>


                    <div class=" listar-steptitle"><em>Additinoal Detail</em></div>

                    <section>

                        <div class="conditional_div">
                            <fieldset>
                                <div class="listar-boxtitle">
                                    <h3>Details</h3>
                                </div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group listar-dashboardfield">
                                            <label>Etes vous le vrai proprietaire?</label>
                                            <select id="is_owner" name="is_owner" class="listar-subscriptionchosen listar-chosendropdown">
                                                <option value="">Choisissez ...</option>
                                                <option value="Yes , i'm the owner">Oui , je suis le properietaire </option>
                                                <option value="No  , i'm an agent">Non </option>
                                                <option value="other">Autre ...</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="other">
                                        <div class="form-group listar-dashboardfield">
                                            <label>Autre</label>
                                            <input type="text"  name="type_owner" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group listar-dashboardfield">
                                            <label>Securite</label>
                                            <input type="text" name="safety" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group listar-dashboardfield">
                                            <label>Type De Fuel</label>
                                            <select id="fuel_type" name="fuel_type" class="listar-subscriptionchosen listar-chosendropdown">
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
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group listar-dashboardfield">
                                            <label>Kilometrage</label>
                                            <select id="mileage" name="mileage" class="listar-subscriptionchosen listar-chosendropdown">
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
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group listar-dashboardfield">
                                            <label>Annee</label>
                                            <select id="year" name="year" class="listar-subscriptionchosen listar-chosendropdown">
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

                                    <div id="property_type_condition">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group listar-dashboardfield">
                                                <label>Chambres</label>
                                                <input type="number" name="rooms" class="form-control" placeholder="">
                                            </div>


                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                            <div class="form-group listar-dashboardfield">
                                                <label>Salles de bain</label>
                                                <input type="number" name="bathrooms" class="form-control" placeholder="">
                                            </div>

                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <div class="form-group listar-dashboardfield">
                                                <label>Etages</label>
                                                <select id="flour" name="flour" class="listar-subscriptionchosen listar-chosendropdown">
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
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                            <div class="form-group listar-dashboardfield">
                                                <label>Chambres a coucher</label>
                                                <input type="number" name="bedrooms" class="form-control" placeholder="">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <div class="form-group listar-dashboardfield">
                                            <label>fiscal power</label>
                                            <input type="text" name="fiscal_power" class="form-control" placeholder="">
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <div class="form-group listar-dashboardfield">
                                            <label>Couleur</label>
                                            <input type="text" name="color" class="form-control" placeholder="">
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group listar-dashboardfield">
                                            <label>Nombre des cylindres</label>
                                            <select id="nbr_cylindre" name="nbr_cylindre" class="listar-subscriptionchosen listar-chosendropdown">
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
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group listar-dashboardfield">
                                            <label>Format du prix</label>
                                            <select id="format_price" name="format_price" class="listar-subscriptionchosen listar-chosendropdown">
                                                <option value="">Choose ...</option>
                                                <option value="fix">Fixe</option>
                                                <option value="negociable">Negociable</option>
                                            </select>

                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <div class="form-group listar-dashboardfield">
                                            <label>Prix</label>
                                            <input type="number" name="price" class="form-control" placeholder="">
                                        </div>

                                    </div>


                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                        <div class="" id="imgs">
                                            <h3 class="box-title"></h3>
                                            <hr class="m-t-0 m-b-40">

                                            <div class="row">

                                                <input onchange="upload(event)" name="files[]" type="file" class="form-control" multiple >
                                                {{--<button id="triggerFile" type="button" class="btn btn-outline-info btn-rounded"><i class="fa fa-file-photo-o"></i> Upload Images</button>--}}

                                            </div>
                                            <br> <br>

                                            <div id="result" class=" "   >

                                            </div>
                                            <br> <br>
                                        </div>

                                    </div>



                                </div>
                            </fieldset>
                        </div>
                    </section>

                </div>
            </form>

        </div>


    </div>



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
        .listar-addlistingsteps .steps ul li {
            float: left;
            z-index: 1;
            width: 33.33%;
            position: relative;
            list-style-type: none;
        }
        select{
            width: 100%;
        }

    </style>


@endsection
@section('js')
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
    <script>
        $(document).on('change',function(){
            $("a[href='#finish']").on('click',function () {
                console.log('clicked finish ')
                $('form').submit()
            })

        });
        $(document).on('change',function(){
            $('#triggerFile').on('click',function () {
                console.log('clicked ')
                $('input[type=file]').click()
            })

        });
        function upload(event){
            console.log('on change ...')
            var files = event.target.files; //FileList object
            var output =  $('#result');

            for(var i = 0; i< files.length; i++)
            {
                console.log(i)
                var file = files[i];

                //Only pics
                if(!file.type.match('image'))
                    continue;

                var picReader = new FileReader();

                picReader.addEventListener("load",function(event){
                    console.log('on load ...')

                    var picFile = event.target;
                    console.log(picFile)
                    $('#result').append("<div class='col-md-3 preview-item'  ><img  class='' src='" + picFile.result + "'" +
                        "title='" + picFile.name + "'/></div>");


                });

                //Read the image
                picReader.readAsDataURL(file);
            }
            console.log(files)
        };

    </script>

    <script>




        $('#other').hide()
        $(document).on('change',function () {
            $('#is_owner').on('change', function () {
                console.log('is owner changed !')
                if ($('#is_owner').val() === "other"){
                    $('#other').show()

                } else{
                    $('#other').hide()

                }
            })
            $('#intention').on('change', function () {
                console.log('Intention changed !')
                if ($('#intention').val() === "Looking for property"){
                    $('#conditional_div').hide()
                    $('#imgs').hide()
                } else{
                    $('#conditional_div').show()
                    $('#imgs').show()
                }
            })
            $('#property_type_condition').hide()
            $('#property_type').on('change', function () {
                console.log('property type changed !')
                if ($('#property_type').val() === "Apartment" || $('#property_type').val() === "Houses and villas" ){
                    $('#property_type_condition').show()
                } else{
                    $('#property_type_condition').hide()
                }
            })

        })






    </script>
@endsection

