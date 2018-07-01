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
                        <a href="{{url('categories/')}}"  class="btn btn-outline-info waves-effect waves-light"><i class="fa fa-arrow-circle-left"></i> Back to Categories List</a>
                    </div>
                </div>

                <div class="row col-md-11 justify-content-center">
                    <h3 class="box-title m-b-0">Add New Ads</h3>
                    <br><br><br> <br>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card ">

                        <div class="card-body">
                            <form method="POST" action="{{ url('ads') }}"class="form-horizontal">
                                @csrf

                                <div class="form-body">
                                    <h3 class="box-title">Basic Information</h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Listing Title</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="John doe">
                                                    <small class="form-control-feedback">  </small> </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Video Url</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="">
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Category</label>
                                                <div class="col-md-9">
                                                    <select class="form-control custom-select">
                                                        @foreach( \App\Category::all() as $category )
                                                        <option value="{{$category->id}}"> {{ $category->name }}</option>
                                                            @endforeach
                                                    </select>
                                                    <small class="form-control-feedback"> </small> </div>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Phone number</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" placeholder="">

                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Address</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Price</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <!--/span-->
                                    </div>
                                    <h3 class="box-title">Social media</h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Facebook Url</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="control-label text-right col-md-3">Twitter Url</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <!--/span-->
                                    </div>
                                    <h3 class="box-title">Gallery</h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">

                                        <input name="files" type="file" class="form-control" multiple hidden >
                                        <button id="triggerFile" type="button" class="btn btn-outline-info btn-rounded"><i class="fa fa-file-photo-o"></i> Upload Images</button>

                                    </div>
                                    <br> <br>

                                        <div id="result" class=""  >

                                        </div>
                                    <br> <br>

                                    <!--/row-->
                                </div>
                                <hr>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                    <button type="button" class="btn btn-inverse">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6"> </div>
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