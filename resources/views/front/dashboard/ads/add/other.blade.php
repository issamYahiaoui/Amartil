@extends('layouts.front_dashboard_layout')

@section('content')



    <div id="listar-content" class="listar-content">




        <div id="listar-content" class="listar-content">
            <form enctype="multipart/form-data" class="listar-formtheme listar-formaddlisting" action="{{url('others')}}" method="POST">
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
            width: 50%;
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

@endsection

