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
                        <a href="{{url('users/')}}"  class="btn btn-outline-info waves-effect waves-light"><i class="fa fa-arrow-circle-left"></i> Back to Users List</a>
                    </div>
                </div>

                <div class="row col-md-11 justify-content-center">
                    <h3 class="box-title m-b-0">Add New User</h3>
                    <br><br><br> <br>
                </div>

                <div class="row justify-content-center">
                    <form style="width: 100%" class="form-horizontal" method="POST" action="{{ url('users') }}">
                     @method('POST')
                     @csrf
                            <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Name</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"   placeholder="" name="name" value="{{ old('name') }}" required> </div>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Phone</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"   placeholder="" name="phone"  value="{{ old('phone') }}" required> </div>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Password</label>

                            <div class="col-md-5">
                                <input  type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"   placeholder="" name="password" > </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Confirm Password</label>
                            <div class="col-md-5">
                                <input id="password-confirm" type="password" class="form-control"   placeholder=" " name="password_confirmation" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Role</label>
                            <div class=" col-md-5">
                                <select name="role" class="form-control">
                                    <option value="admin">Customer</option>
                                    <option value="superadmin">Super Admin</option>

                                </select>
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