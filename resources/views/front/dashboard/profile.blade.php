@extends('layouts.front_dashboard_layout')

@section('content')
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
                                <input type="text" name="name" class="form-control" placeholder="Mr Customer">
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
                                <input type="email" name="email" class="form-control" placeholder="customer@gmail.com">
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
                                <input type="text" name="phone" class="form-control" placeholder="013214577">
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
