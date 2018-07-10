@extends('layouts.front_dashboard_layout')

@section('content')
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
    <div id="listar-content" class="listar-content">

            <form style="width: 100%" class="listar-formtheme listar-formaddlisting" method="POST" action="{{ url('me') }}">
                @method('PUT')
                @csrf
            <fieldset>
                <div class="listar-boxtitle">
                    <h3>Mon Profile</h3>
                </div>
                <div class="">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield">
                                <label>Nom</label>
                                <input type="text" name="name" class="form-control" value="{{$model->name}}">
                            </div>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control"  value="{{$model->email}}">
                            </div>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield">
                                <label>Mobile</label>
                                <input type="text" name="phone" class="form-control"  value="{{$model->phone}}">
                            </div>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>


                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="listar-boxtitle">
                    <h3>Changer Mot de passe</h3>
                </div>
                <div class="listar-dashboardpassword">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield">
                                <label>Nouveau Mot de passe</label>
                                <input type="password" name="password" class="form-control" placeholder="">
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group listar-dashboardfield">
                                <label>Confirmer  Mot de passe</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <button class="listar-btn listar-btngreen" >Mise a jour Du profile </button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
@section('js')
    <script>

    </script>
    @endsection
