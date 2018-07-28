@extends('layouts.dashboard_layout')


@section('content')
    <div class="row justify-content-center">
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


                <div class="row col-md-11 justify-content-center">
                    <h3 class="box-title m-b-0">Settings </h3>
                    <br><br><br> <br>
                </div>

                <div class="row justify-content-center">
                    <form enctype="multipart/form-data" style="width: 100%" class="form-horizontal" method="POST" action="{{ url('settings') }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Website name</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="website_name" value="{{ $settings->website_name }}" > </div>
                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Website Address</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="website_adr" value="{{ $settings->website_adr }}" > </div>
                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Website Description</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="website_description" value="{{ $settings->website_description}}" > </div>
                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Website phone</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="website_phone" value="{{ $settings->website_phone }}" > </div>
                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Website facebook</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="website_facebook" value="{{ $settings->website_facebook }}" > </div>
                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Website twitter</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="website_twitter" value="{{ $settings->website_twitter }}" > </div>
                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Website youtube</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="website_youtube" value="{{ $settings->website_youtube }}" > </div>
                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Website instagram</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="website_instagram" value="{{ $settings->website_instagram }}" > </div>
                        </div>
                        @if($settings->images())
                        <h3 class="box-title">Uploaded images</h3>
                        <hr class="m-t-0 m-b-40">
                        <div id="preview" class="row">

                                @foreach($settings->images() as $img)
                                    <div class="col-md-3 text-center">

                                        <img style="width: 150px !important; height: 150px !important; ; " class="img-responsive" src="{{asset('images/slider/'.$img->filename)}}" alt="">
                                        <br> <br>
                                        <a href="{{url('settings-img/'.$img->id.'/delete')}}" class="btn btn-outline-danger">Delete</a>
                                    </div>
                                @endforeach



                        </div>
                        @endif
                        <br> <br>
                        <div class="" id="imgs">
                            <h3 class="box-title"> Banner Slider  Images</h3>
                            <hr class="m-t-0 m-b-40">

                            <div class="row">

                                <input name="files[]" type="file" class="form-control" multiple hidden >
                                <button id="triggerFile" type="button" class="btn btn-outline-info btn-rounded"><i class="fa fa-file-photo-o"></i> Upload Images</button>

                            </div>
                            <br> <br>

                            <div id="result" class="row"   >

                            </div>
                            <br> <br>
                        </div>




                        <div class="form-group row">
                            <div class="col-md-4">
                            </div>
                            <div class="row col-md-4 " style="display: flex ; justify-content: center">

                                <button type="submit" class="btn btn-success waves-effect waves-light m-t-10">Save</button>

                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
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