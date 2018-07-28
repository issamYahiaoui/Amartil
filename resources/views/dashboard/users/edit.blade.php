@extends('layouts.dashboard_layout')


@section('content')
    <div class="row justify-content-center">
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
        <div class="col-md-12">
            <div class="card card-body">
                <div class="row ">
                    <div class="col-md-3">
                        <a href="{{url('users/')}}"  class="btn btn-outline-info waves-effect waves-light"><i class="fa fa-arrow-circle-left"></i> Back to Users List</a>
                    </div>
                </div>

                <div class="row col-md-11 justify-content-center">
                    <h3 class="box-title m-b-0">Add New User</h3>
                    <br><br><br> <br>
                </div>

                <div class="row justify-content-center">
                    <form style="width: 100%" class="form-horizontal" method="POST" action="{{ url('users/edit/'.$model->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Name</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="name" value="{{ $model->name }}" required> </div>

                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Email</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="email"  value="{{$model->email }}" required> </div>

                        </div> <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Phone</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="phone"  value="{{ $model->phone }}" required> </div>

                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Ads Limit</label>

                            <div class="col-md-5">
                                <input  type="number" class="form-control"   placeholder="" name="ads_limit"  value="{{ $model->ads_limit}}" required> </div>

                        </div>


                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Password</label>

                            <div class="col-md-5">
                                <input  type="password" class="form-control"   placeholder="" name="password" > </div>

                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Confirm Password</label>
                            <div class="col-md-5">
                                <input id="password-confirm" type="password" class="form-control"   placeholder=" " name="password_confirmation" >
                            </div>
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