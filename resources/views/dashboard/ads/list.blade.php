@extends('layouts.dashboard_layout')


@section('content')
    <div class="container">
        <div class="row">
            @if(count($errors->all())>0)
                <div class="alert alert-danger text-center col-md-12 ">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
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
                                class="fa fa-close"></i></span>
                </div>
            @endif

            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row col-md-12" style="display: flex; justify-content: space-between">
                        <div class="col-md-3">
                            <a href="{{url('ads/create')}}"  class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Add New Ads</a>
                        </div>

                        <div class="col-md-5">
                            <label class="text-center" for="nbrTour">Number Of Ads</label>
                            <input id="nbrTour" value="{{count($list)}}" type="text">
                        </div>

                    </div>
                    <br> <br>


                        <table id="categoryTable" class="display  table responsive nowrap table-hover  table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="text-center">image</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Customer Phone</th>
                                <th class="text-center">Actions</th>

                            </tr>
                            </thead>

                            <tbody>

                            @foreach($list as $model)

                                <tr>
                                        <td style="width: 20%"  class="text-center" >

                                        @if(count($model->images()) > 0)
                                            <img width="100%" class="img-responsive" src="{{asset('images/'.$model->images()[0]->filename)}}" alt="">
                                        @else
                                            <img  width="100%" class="img-responsive" src="{{asset('images/empty-image.png')}}" alt="">
                                        @endif

                                    </td>
                                    <td class="text-center">{{$model->title}}</td>
                                    <td class="text-center">{{$model->subclass()->price}}</td>
                                    <td class="text-center">{{$model->owner_phone}}</td>

                                    <td class="text-center"  style="display: flex ; justify-content: space-around ; align-items: center ; width: available">
                                        <div class="">
                                            <form action="{{url('ads/'.$model->id.'/activate')}}" method="POST" >
                                                @method('PUT')
                                                @csrf
                                                <div class="row  " >
                                                    @if($model->active)
                                                        <button type="submit" class="btn btn-warning waves-effect waves-light">Desactivate</button>

                                                    @else
                                                        <button type="submit" class="btn btn-success waves-effect waves-light ">Activate</button>

                                                    @endif
                                                </div>
                                            </form>
                                        </div>

                                        <form action="{{url('ads/'.$model->id.'/edit')}}" method="GET" >

                                            @csrf
                                            <div class="row">
                                                <button type="submit" class="btn btn-block btn-outline-info "><li class="fa fa-edit"></li></button>
                                            </div>
                                        </form>


                                        <div action="">
                                            <button
                                                    class="btn btn-block btn-outline-danger"
                                                    data-toggle="modal"
                                                    data-target="#delete{{$model->id}}"
                                            >
                                                <li class="fa fa-remove"></li>
                                            </button>

                                        </div>

                                        <div class="modal fade" id="delete{{$model->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel1">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">&times;</span>
                                                        </button>

                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{url('ads/'.$model->id)}}" method="POST" >
                                                            @method('DELETE')
                                                            @csrf
                                                            <div class="row justify-content-center">
                                                                <h5>Are You Sure To Delete This Category</h5>
                                                            </div>
                                                            <div class="row  " style="display: flex ; justify-content: space-around">

                                                                <button type="submit" class="btn btn-danger waves-effect waves-light m-t-10">DELETE</button>
                                                                <button  data-dismiss="modal" class="btn btn-outline-danger waves-effect waves-light m-t-10">Cancel</button>

                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                </div>

            </div>


        </div>

    </div>


@endsection


@section('css')
    <link href="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    @endsection



@section('js')
    <script src="{{asset('dashboard/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>

    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>


    <script>
        $('#categoryTable').DataTable({

            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: [ 0 ]
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [ 0 ]
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [ 0]
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: [ 0]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [ 0 ]
                    }
                }
            ],


        });
    </script>
@endsection