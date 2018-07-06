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
                        <form enctype="multipart/form-data"  method="POST" action="{{ url('cars/'.$model->id) }}"class="form-horizontal">
                            @csrf
                            @method('PUT')

                            <input name="ads_id" value="{{$model->ads()->id}}"  hidden type="text">

                            <div class="form-body">
                                <h3 class="box-title">Basic Information</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Listing Title</label>
                                            <div class="col-md-9">
                                                <input value="{{$model->ads()->title}}" name="title" type="text" class="form-control" placeholder="">
                                                <small class="form-control-feedback">  </small> </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Video Url</label>
                                            <div class="col-md-9">
                                                <input value="{{$model->ads()->video_url}}" name="video_url" type="text" class="form-control" placeholder="">
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
                                                <input value="{{$model->ads()->owner_phone}}" type="number" name="owner_phone" class="form-control" placeholder="">

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
                                                <input value="{{$model->car_model}}"name="car_model" type="text" class="form-control" placeholder="">
                                                <small class="form-control-feedback">  </small> </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Model</label>
                                            <div class="col-md-9">
                                                <input value="{{$model->model}}" name="model" type="text" class="form-control" placeholder="">
                                                <small class="form-control-feedback"> </small> </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>

                                <div id="conditional_div" class="">

                                    <h3 class="box-title"></h3>
                                    <hr class="m-t-0 m-b-40">

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
                                                    <input value="{{$model->type_owner}}" type="text" name="type_owner" class="form-control" placeholder="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Full Address</label>
                                                <div class="col-md-9">
                                                    <input value="{{$model->adr}}" type="text"  name="adr" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">safety</label>
                                                <div class="col-md-9">
                                                    <input value="{{$model->safety}}" type="number" name="safety" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
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
                                                    <input value="{{$model->fiscal_power}}" name="fiscal_power" type="text" class="form-control" placeholder=""/>
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
                                                    <input  value="{{$model->price}}" type="number" name="price" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <!--/row-->
                                </div>
                                <hr>
                            </div>

                            <div id="description" class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Color</label>
                                        <div class="col-md-9">
                                            <input value="{{$model->color}}" name="color" type="text" class="form-control" placeholder=""/>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Description</label>
                                        <div class="col-md-9">
                                            <textarea name="description" type="text" class="form-control" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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
                            <div id="preview" class="row">
                                @if($model->ads()->images())
                                    @foreach($model->ads()->images() as $img)
                                        <div class="col-md-3 text-center">

                                            <img style="width: 150px !important; height: 150px !important; ; " class="img-responsive" src="{{asset('images/'.$img->filename)}}" alt="">
                                            <br> <br>
                                            <a href="{{url('img/'.$img->id.'/delete')}}" class="btn btn-outline-danger">Delete</a>
                                        </div>
                                    @endforeach
                                @endif


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

    <script>
        $("#files").dropzone({ url: '/ads', autoProcessQueue: true });
    </script>

    <script>
        console.log('files js is On')
        $('#triggerFile').on('click',function () {
            console.log('clicked ')
            $('input[type=file]').click()
        })




        var filesInput =  $('input[type=file]');

        filesInput.on("change", function(event){
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
        });


        $('#is_owner').val("{{$model->is_owner}}")
        if ($('#is_owner').val() === "other"){
            $('#other').show()

        } else{
            $('#other').hide()

        }
        $('#intention').val("{{$model->intention}}")
        if ($('#intention').val() === "Looking for property"){
            $('#conditional_div').hide()
            $('#imgs').hide()
        } else{
            $('#conditional_div').show()
            $('#imgs').show()
        }
        $('#property_type').val("{{$model->property_type}}")
        if ($('#property_type').val() === "Apartment" || $('#property_type').val() === "Houses and villas" ){
            $('#property_type_condition').show()
        } else{
            $('#property_type_condition').hide()
        }
        $('#description').val("{{$model->description}}")
        $('#fuel_type').val("{{$model->fuel_type}}")
        $('#mileage').val("{{$model->mileage}}")
        $('#year').val("{{$model->year}}")
        $('#nbr_cylindre').val("{{$model->nbr_cylindre}}")
        $('#format_price').val("{{$model->format_price}}")

        $('#other').hide()

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


    </script>
@endsection


@section('css')
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