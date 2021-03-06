@extends('layouts.dashboard_layout')


@section('content')
    <div class="container">
        <div class="row">
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

            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row col-md-12" style="display: flex; justify-content: space-between">
                        <div class="col-md-3">
                            <a href="{{url('users/create')}}"  class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Add New User</a>
                        </div>

                        <div class="col-md-5">
                            <label class="text-center" for="nbrTour">Number Of Users</label>
                            <input id="nbrTour" value="{{count($list)}}" type="text">
                        </div>

                    </div>
                    <br> <br>
                    <div class="table-responsive"></div>
                     <table id="agentTable" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Ads number</th>
                            <th class="text-center">Ads limit</th>
                            <th class="text-center">Active</th>
                            <th class="text-center">Actions</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($list as $model)

                            <tr>

                                <td class="text-center">{{$model->name}}</td>
                                <td class="text-center">{{$model->email}}</td>
                                <td class="text-center">{{$model->phone}}</td>

                                <td class="text-center">
                                    <span
                                            @if($model->role === "superadmin")
                                            class="label label-success"
                                                    @elseif ($model->role === "admin")
                                            class="label label-info"
                                                    @else
                                            class="label label-warning"

                                            @endif

                                    >
                                        {{$model->role}}
                                    </span>
                                </td>
                                <td class="text-center">{{count($model->ads())}}</td>
                                <td class="text-center">{{$model->ads_limit}}</td>

                                <td class="text-center">

                                    @if($model->active)
                                        <div class="label label-success">
                                            Active
                                        </div>
                                    @else
                                        <div class="label label-danger">
                                            inactive
                                        </div>

                                    @endif
                                </td>


                                <td class="text-center" style="display: flex ; justify-content: space-between">



                                   <div class="" style="margin-right: 5px">
                                             <form action="{{url('users/'.$model->id.'/activate')}}" method="POST" >
                                                 @method('PUT')
                                                 @csrf
                                                 <div class="row  " >
                                                     @if($model->active)
                                                         <button style="font-size: 12px ; width: 100%;" type="submit" class="btn btn-warning ">Desactivate</button>

                                                     @else
                                                         <button style="font-size: 12px" type="submit" class="btn btn-success ">Activate</button>

                                                     @endif
                                                 </div>
                                             </form>
                                    </div>
                                    <div class="">
                                        <form action="{{url('users/edit/'.$model->id)}}" method="GET" >

                                            @csrf
                                            <div class="row  " >
                                                <button type="submit" class="btn btn-info  "><i class="fa fa-edit"></i> </button>

                                            </div>
                                        </form>
                                    </div>

                                    <div class="">
                                        <button type="submit"
                                                class="btn btn-danger "
                                                data-toggle="modal"
                                                data-target="#delete{{$model->id}}"
                                        >
                                            <i class="fa fa-remove"></i>

                                        </button>

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
                                                        <form action="{{url('users/'.$model->id)}}" method="POST" >
                                                            @method('DELETE')
                                                            @csrf
                                                            <div class="row justify-content-center">
                                                                <h5>Are You Sure To Delete This User</h5>
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
        $('#agentTable').DataTable({
            responsive: true,

            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy',
                    exportOptions: {
                        columns: [ 0, 1, 2 ]
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: [ 0, 1, 2 ]
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [ 0, 1, 2]
                    }
                },
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: [ 0, 1, 2]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [ 0, 1, 2 ]
                    }
                }
            ],


        });
    </script>
    @endsection