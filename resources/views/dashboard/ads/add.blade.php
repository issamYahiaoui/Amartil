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

        <div class="card">
            <div class="row " style="display: flex ; justify-content: space-around">
                <div class="">
                    <a class="btn btn-primary"
                    href="{{url('apartments/create')}}"
                    >
                        <li class="fa fa-home"></li>
                        Add Apartment ad
                    </a>
                </div>
                <div class="">
                    <a class="btn btn-info"
                    href="{{url('cars/create')}}"
                    >
                        <li class="fa fa-car"></li>
                        Add Car ad
                    </a>
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