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
                                                <label class="control-label text-right col-md-3">Full Address</label>
                                                <div class="col-md-9">
                                                    <input type="text"  name="adr" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Zip / Postal code</label>
                                                <div class="col-md-9">
                                                    <input type="number" name="zip" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
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
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Description</label>
                                        <div class="col-md-9">
                                            <textarea name="description" type="text" class="form-control" placeholder=""></textarea>
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