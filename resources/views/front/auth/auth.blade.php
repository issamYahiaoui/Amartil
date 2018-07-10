<div id="listar-loginsingup" class="listar-loginsingup">
    <button type="button" class="listar-btnclose">x</button>
    <figure class="listar-loginsingupimg" data-vide-bg="poster:{{asset('front/images/slider/img-03.jpg')}}" data-vide-options="position: 50% 50%">
        <div style="position: absolute; z-index: -1; top: 0px; left: 0px; bottom: 0px; right: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: url({{asset('front/images/slider/img-03.jpg')}});"><video autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: hidden; opacity: 0; width: auto; height: 421px;"></video></div>
    </figure>
    <div class="listar-contentarea">
        <div class="listar-themescrollbar">
            <div class="listar-logincontent">
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
                <div class="listar-themetabs">
                    <ul class="listar-tabnavloginregistered" role="tablist">
                        <li role="presentation" class="active"><a href="#listar-loging" data-toggle="tab">Log in</a></li>
                        <li role="presentation"><a href="#listar-register" data-toggle="tab">Register</a></li>
                    </ul>
                    <div class="tab-content listar-tabcontentloginregistered">
                        <div role="tabpanel" class="tab-pane active fade in" id="listar-loging">
                            <form class="listar-formtheme listar-formlogin"   method="POST" action="{{ url('/loginCustomer') }}">
                                @csrf
                                <fieldset>
                                    <div class="form-group listar-inputwithicon">
                                        <i class="icon-profile-male"></i>
                                        <input type="text" name="email" class="form-control" placeholder=" Email">
                                    </div>
                                    <div class="form-group listar-inputwithicon">
                                        <i class="icon-icons208"></i>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="listar-checkbox">
                                            <input type="checkbox" name="remember" id="rememberpass2">
                                            <label for="rememberpass2">Remember me</label>
                                        </div>
                                        {{--<span><a href="#">Lost your Password?</a></span>--}}
                                    </div>
                                    <button type="submit" class="listar-btn listar-btngreen">Login</button>
                                </fieldset>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="listar-register">
                            <form class="listar-formtheme listar-formlogin"  method="POST" action="{{ url('customers') }}">
                                @csrf
                                <fieldset>
                                    <div class="form-group listar-inputwithicon">
                                        <i class="icon-profile-male"></i>
                                        <input type="text" name="name" class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group listar-inputwithicon">
                                        <i class="icon-icons208"></i>
                                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="form-group listar-inputwithicon">
                                        <i class="icon-icons208"></i>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group listar-inputwithicon">
                                        <i class="icon-lock-stripes"></i>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group listar-inputwithicon">
                                        <i class="icon-lock-stripes"></i>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                    </div>
                                    <button type="submit" class="listar-btn listar-btngreen">Register</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                {{--<div class="listar-shareor"><span>or</span></div>--}}
                {{--<div class="listar-signupwith">--}}
                    {{--<h2>Sign in With...</h2>--}}
                    {{--<ul class="listar-signinloginwithsocialaccount">--}}
                        {{--<li class="listar-facebook"><a href="javascript:void(0);"><i class="icon-facebook-1"></i><span>Facebook</span></a></li>--}}
                        {{--<li class="listar-twitter"><a href="javascript:void(0);"><i class="icon-twitter-1"></i><span>Twitter</span></a></li>--}}
                        {{--<li class="listar-googleplus"><a href="javascript:void(0);"><i class="icon-google4"></i><span>Google +</span></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>