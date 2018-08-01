<header id="listar-dashboardheader" class="listar-dashboardheader listar-haslayout">
    <div class="cd-auto-hide-header listar-haslayout">
        <div class="container-fluid">
            <div class="row">
                <strong class="listar-logo"><a href="{{url('/')}}">
                        <img  width="50px" height="50px" class="img-responsive" src="{{asset('front/images/logomartil.png')}}" alt="company logo here">

                    </a></strong>
                <nav class="listar-addnav">
                    <ul>
                        <li>
                            <div class="dropdown listar-dropdown">
                                <a class="listar-userlogin listar-btnuserlogin" href="javascript:void(0);" id="listar-dropdownuser" data-toggle="dropdown">
                                    <span class="fa fa-user-circle"></span>
                                    <em>{{\Illuminate\Support\Facades\Auth::user()->name}}</em>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu listar-dropdownmen" aria-labelledby="listar-dropdownuser">
                                    <ul>
                                        <li>
                                            <a  href="{{url('u/dashboard')}}">
                                                <i class="icon-speedometer2"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="{{url('u/ads')}}">
                                                <i class="icon-layers"></i>
                                                <span>Mes Annonces</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="{{url('u/profile')}}">
                                                <i class="icon-user2"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li>
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
                                </div>
                            </div>
                        </li>
                        <li>
                            <a class="listar-btn listar-btngreen" href="{{url('u/add-ad')}}">
                                <i class="icon-plus"></i>
                                <span>Ajouter Annonce</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown listar-themedropdown">
                                <a id="listar-cartdropdown" style="color: #f98925 !important;" class="listar-btn listar-btnround listar-btncartdropdown" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if(\Illuminate\Support\Facades\Auth::user())
                                        <em>{{count(\App\Message::where('read_by_receiver',0)->where('to',\Illuminate\Support\Facades\Auth::user()->email)->get())}}</em>
                                    @endif
                                    <i class="icon-email"></i>
                                </a>
                                <div class="dropdown-menu listar-themedropdownmenu listar-minicart" aria-labelledby="listar-cartdropdown">
                                    @if(\Illuminate\Support\Facades\Auth::user())
                                    @foreach(\App\Message::where('read_by_receiver',0)->where('to',\Illuminate\Support\Facades\Auth::user()->email)->get() as $newMessage)

                                                <div class="listar-cartitem">
                                                    <div class="listar-iteminfo">
                                                        <a href="{{url('u/detail/'.$newMessage->id)}}">
                                                            <div class="mail-contnet">
                                                                <h5>{{$newMessage->from}}</h5>
                                                                <span class="mail-desc">{{$newMessage->subject}}</span>
                                                                <span class="time">{{ date_format(new DateTime($newMessage->created_at),'d M')}}</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                    @endforeach
                                    @endif

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
                                    <li><a href="{{url('show-ads/all')}}">Toutes les annonces</a></li>
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


                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>

    @include('layouts.partials.front_dashboard.sidebar')

</header>
<style>
    .listar-header {
        z-index: 100;
        padding: 15px 0;
        background: #fff !important;
        position: relative;
        text-align: center;
        -webkit-box-shadow: 0 0 15px 0 rgba(0,0,0,0.10);
        box-shadow: 0 0 15px 0 rgba(0,0,0,0.10);
    }
    .nav-black > li > a{color: #222 !important;}
</style>