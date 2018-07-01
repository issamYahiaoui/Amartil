<li class="nav-item dropdown u-pro">
    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('dashboard/images/icon/staff-w.png')}}" alt="user" class=""> <span class="hidden-md-down">{{\Illuminate\Support\Facades\Auth::user()->name}}&nbsp;<i class="fa fa-angle-down"></i></span> </a>
    <div class="dropdown-menu dropdown-menu-right animated flipInY">
        <!-- text-->
        <a href="{{url('me')}}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
        <!-- text-->
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="ti-power-off"></i>  Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    {{--<a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>--}}
    <!-- text-->
    </div>
</li>