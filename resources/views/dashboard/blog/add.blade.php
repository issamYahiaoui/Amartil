@extends('layouts.dashboard_layout')


@section('content')
    <div class="row justify-content-center">
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
                        <a href="{{url('articles/')}}"  class="btn btn-outline-info waves-effect waves-light"><i class="fa fa-arrow-circle-left"></i> Back to Articles List</a>
                    </div>
                </div>

                <div class="row col-md-11 justify-content-center">
                    <h3 class="box-title m-b-0">Add New Article</h3>
                    <br><br><br> <br>
                </div>

                <div class="row justify-content-center">
                    <form enctype="multipart/form-data" style="width: 100%" class="form-horizontal" method="POST" action="{{ url('articles') }}">
                        @method('POST')
                        @csrf
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Title</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="title" value="{{ old('title') }}" required> </div>
                        </div>
                        <div class="form-group   text-center" style="display: flex; flex-direction: column ; justify-content: center ;">
                            <label  for="content" class=" text-left control-label col-form-label">Content</label>
                            <div class="">
                                <textarea class="form-control" id="content" name="content"></textarea>
                            </div>


                        </div>

                        <div class="from-group row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Article image</label>
                            <div class="col-md-5">

                                <input name="file" type="file" class="form-control" hidden >
                                <button id="triggerFile" type="button" class="btn btn-outline-info btn-rounded"><i class="fa fa-file-photo-o"></i> Upload</button>
                            </div>

                        </div>

                        <br> <br>
                        <div id="result" class=" row justify-content-center"  >

                        </div>

                        <br> <br>



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
    <script src="{{asset('dashboard/node_modules/tinymce/tinymce.min.js')}}"></script>

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
            console.log(files)
            var output =  $('#result');


                console.log('0')
                var file = files[0];

                //Only pics
                if(!file.type.match('image'))
                    return false

                var picReader = new FileReader();

                picReader.addEventListener("load",function(event){
                    console.log('on load ...')

                    var picFile = event.target;
                    console.log(picFile)
                    $('#result').append("<div class=' preview-item'  ><img  class='' src='" + picFile.result + "'" +
                        "title='" + picFile.name + "'/></div>");


                });

                //Read the image
                picReader.readAsDataURL(file);
            })




        // editor
        $(document).ready(function () {
            console.log('awwww')
            if ($("#content").length > 0) {
                tinymce.init({
                    selector: "textarea#content",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        })


    </script>
    @endsection



@section('css')

    <link rel="stylesheet" href="{{asset('dashboard/node_modules/html5-editor/bootstrap-wysihtml5.css')}}"/>
    <link rel="stylesheet" href="{{asset('dashboard/node_modules/tinymce/skins/lightgray/skin.min.css')}}"/>

    <style>
        img {
            max-width: 100%;
            height: auto;
        }

        .preview-item{
            max-width: 300px;
            max-height: 300px;

            float: left;
            margin: 3px;
            padding: 3px;
        }
    </style>
@endsection