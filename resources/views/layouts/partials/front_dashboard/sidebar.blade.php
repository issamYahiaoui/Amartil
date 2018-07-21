<div id="listar-sidebarwrapper" class="listar-sidebarwrapper">
    <strong class="listar-logo"><a href="{{url('/')}}">
            <img  width="50px" height="50px" class="img-responsive" src="{{asset('front/images/logomartil.png')}}" alt="company logo here">
        </a></strong>
    <span id="listar-btnmenutoggle" class="listar-btnmenutoggle"><i class="fa fa-angle-left"></i></span>
    <div id="listar-verticalscrollbar" class="listar-verticalscrollbar">
        <nav id="listar-navdashboard" class="listar-navdashboard" style="height: 90% !important;">
            <div class="listar-menutitle"><span>Principale</span></div>
            <ul>
                <li class="listar">
                    <a  href="{{url('u/dashboard')}}">
                        <i class="icon-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="listar">
                    <a  href="{{url('u/inbox')}}">
                        <i class="icon-email"></i>
                        <span>Inbox</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('u/ads')}}">
                        <i class="icon-layers"></i>
                        <span>Mes Annonces</span>
                    </a>
                </li>

                <li>
                    <a  href="{{url('u/add-ad')}}">
                        <i class="icon-pencil3"></i>
                        <span>Ajouter Annonce</span>
                    </a>
                </li>
            </ul>
            <div class="listar-menutitle listar-menutitleaccount"><span>Compte</span></div>
            <ul>
                <li>
                    <a  href="{{url('u/profile')}}">
                        <i class="icon-lock6"></i>
                        <span>Profile</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</div>