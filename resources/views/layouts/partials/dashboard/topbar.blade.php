<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{asset('dashboard/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img width="50px" height="50px" src="{{asset('front/images/logomartil.png')}}" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         {{--<img src="{{asset('dashboard/images/logo-text.png')}}" alt="homepage" class="dark-logo" />--}}
                    <!-- Light Logo text -->
                         <img width="50px" height="50px" class="light-logo" alt="" hidden /></span> </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                <!-- ============================================================== -->

            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown show">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="ti-email"></i>
                        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown ">
                        <ul>
                            <li>
                                <div class="drop-title">Messages</div>
                            </li>
                            <li>
                                <div class="message-center ps ps--theme_default" data-ps-id="dcbaad4c-9847-31cb-c127-5d6711a2c910">
                                    <!-- Message -->
                            @foreach($newMessages as $newMessage)


                                    <a href="{{url('inboxDetail/'.$newMessage->id)}}">
                                        <div class="mail-contnet">
                                            <h5>{{$newMessage->from}}</h5>
                                            <span class="mail-desc">{{$newMessage->subject}}</span>
                                            <span class="time">{{ date_format(new DateTime($newMessage->created_at),'d M')}}</span>
                                        </div>
                                    </a>


                            @endforeach


                                    <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                            </li>
                            <li>
                              <ul>

                              </ul>
                            <li>
                                <a class="nav-link text-center link" href="{{url('inbox')}}"> <strong>Check all messages</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- ============================================================== -->
                <!-- User Profile -->
                <!-- ============================================================== -->
               @include('layouts.partials.dashboard.user-profile')
                <!-- ============================================================== -->
                <!-- End User Profile -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>