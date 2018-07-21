<header id="listar-header" class="listar-header cd-auto-hide-header listar-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <strong class="listar-logo">

                        <a href="{{url('/')}}">
                            <img  width="50px" height="50px" class="img-responsive" src="{{asset('front/images/logomartil.png')}}" alt="company logo here">


                        </a>





                </strong>

                <nav class="listar-addnav">
                    <ul>
                        <li>
                            @if( ! \Illuminate\Support\Facades\Auth::user())

                                <a id="listar-btnsignin" class="listar-btn listar-btnblue" href="#listar-loginsingup">
                                    <i class="icon-smiling-face"></i>
                                    <span>Se Connecter</span>
                                </a>
                            @endif
                        </li>
                        <li>
                            <a class="listar-btn listar-btngreen" href="{{url('u/add-ad')}}">
                                <i class="icon-plus"></i>
                                <span>Ajouter Une Annonce </span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown listar-themedropdown">
                                <a id="listar-cartdropdown" style="color: #f98925 !important;" class="listar-btn listar-btnround listar-btncartdropdown" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <em>{{count(\App\Message::where('user_id', \Illuminate\Support\Facades\Auth::id())->get())}}</em>
                                    <i class="icon-email"></i>
                                </a>
                                <div class="dropdown-menu listar-themedropdownmenu listar-minicart" aria-labelledby="listar-cartdropdown">
                                    @foreach($newMessages as $newMessage)
                                        @if($newMessage->belongsToUser())
                                            <div class="listar-cartitem">

                                                <div class="listar-iteminfo">
                                                    <a href="{{url('inboxDetail/'.$newMessage->id)}}">
                                                        <div class="mail-contnet">
                                                            <h5>{{$newMessage->sender}}</h5>
                                                            <span class="mail-desc">{{$newMessage->subject}}</span>
                                                            <span class="time">{{ date_format(new DateTime($newMessage->created_at),'d M')}}</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                    <a class="listar-btn listar-btngreen listar-btn-lg" href="{{url('u/inbox')}}">Voir tous les messages</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
                <nav id="listar-nav" class="listar-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#listar-navigation" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="listar-navigation" class="collapse navbar-collapse listar-navigation">
                        <ul class="nav-black">
                            <li class="menu-item current-menu-item">
                                <a href="{{url('/')}}">Acceuil</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Explorer</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('show-ads/all')}}">Tous les annonces</a></li>
                                    <li class="menu-item">
                                        <a href="{{url('show-ads/apartments')}}">Appartements</a>

                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url('show-ads/cars')}}">Vehicules</a>

                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url('show-ads/others')}}">Autres</a>

                                    </li>

                                </ul>
                            </li>

                            <li class="menu-item">
                                <a href="{{url('contact')}}">Contact</a>

                            </li>
                            <li><a href="{{url('blog')}}">Blog</a></li>

                            @if(\Illuminate\Support\Facades\Auth::user())
                                <li><a href="{{url('u/dashboard')}}">Dasboard</a></li>
                                <li class="menu-item-has-children">
                                    <a  class="listar-btn " href="javascript:void(0);">
                                        <i class="fa fa-user-circle"></i>
                                        <span> {{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a  href="{{url('u/dashboard')}}">
                                                <i class="icon-speedometer2"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a  href="{{url('u/ads')}}">
                                                <i class="icon-layers"></i>
                                                <span>Mes Annonces</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a  href="{{url('u/profile')}}">
                                                <i class="icon-user2"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="icon-lock6"></i>  Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>