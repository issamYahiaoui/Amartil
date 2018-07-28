<footer id="listar-footer" class="listar-footer listar-haslayout" >
    <div class="listar-footeraboutarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="listar-upperbox">
                        <strong class="listar-logo"><a href="javascript:void(0);"> <img width="50px" height="50px" src="{{asset('front/images/logomartil.png')}}" alt="homepage" class="light-logo" />
                            </a></strong>
                        <ul class="listar-socialicons">
                            <li class="listar-facebook"><a href="{{\App\Settings::all()->first()->website_facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li class="listar-twitter"><a href="{{\App\Settings::all()->first()->website_twitter}}"><i class="fa fa-twitter"></i></a></li>
                            <li class="listar-linkedin"><a href="{{\App\Settings::all()->first()->website_youtube}}"><i class="fa fa-youtube"></i></a></li>
                            <li class="listar-googleplus"><a href="{{\App\Settings::all()->first()->website_instagram}}"><i class="fa fa-instagram"></i></a></li>

                        </ul>
                        <nav class="listar-navfooter">
                            <ul>
                                <li><a href="{{url('/')}}">Acceuil</a></li>
                                <li><a href="{{url('/all-ads')}}">Tous Les Annonces </a></li>
                                <li><a href="{{url('/blog')}}">Blog</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                                <li><a href="{{url('/u/dashboard')}}">Dashboard</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="listar-lowerbox">
                        <div class="listar-description">
                          <p>{{\App\Settings::all()->first()->website_description}}</p> </div>
                        <address><strong>Address:</strong> {{\App\Settings::all()->first()->website_adr}} <span><strong>Tel:</strong> {{\App\Settings::all()->first()->website_phone}}</span></address>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="listar-footerbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <span class="listar-copyright">Copyright &copy; 2018 {{\App\Settings::all()->first()->website_name}}. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
</footer>
