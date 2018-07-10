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
                <div class="row ">
                    <div class="col-md-3">
                        <a href="{{url('categories/')}}"  class="btn btn-outline-info waves-effect waves-light"><i class="fa fa-arrow-circle-left"></i> Back to Categories List</a>
                    </div>
                </div>

                <div class="row col-md-11 justify-content-center">
                    <h3 class="box-title m-b-0">Add New Category</h3>
                    <br><br><br> <br>
                </div>

                <div class="row justify-content-center">
                    <form style="width: 100%" class="form-horizontal" method="POST" action="{{ url('categories') }}">
                        @method('POST')
                        @csrf
                        <div class="form-group  row ">
                            <label for="" class="col-sm-3 text-right control-label col-form-label">Name</label>

                            <div class="col-md-5">
                                <input  type="text" class="form-control"   placeholder="" name="name" value="{{ old('name') }}" required> </div>
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