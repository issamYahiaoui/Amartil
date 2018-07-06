

@extends('layouts.front_layout')

@section('content')
    <!--************************************
            Header Start
    *************************************-->
    @include('layouts.partials.front.header')
    <div class="listar-innerbanner">
        <div class="listar-parallaxcolor listar-innerbannerparallaxcolor">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="listar-innerbannercontent">
                            <div class="listar-pagetitle">
                                <h1>Dernieres nouvelles</h1>
                            </div>
                            <ol class="listar-breadcrumb">
                                <li><a href="javascript:void(0);">Acceuil</a></li>
                                <li class="listar-active"><span>Nouvelles</span></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
            Inner Banner End
    *************************************-->
    <!--************************************
            Main Start
    *************************************-->
    <main id="listar-main" class="listar-main listar-innerspeace listar-bglight listar-haslayout">
        <div class="container">
            <div class="row">
                <div id="listar-content" class="listar-content">
                    <div class="listar-posts listar-postsgrid listar-postsgridvone">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="listar-themepost listar-post">
                                <figure class="listar-featuredimg">
                                    <a href="newsdetail.html"><img src="{{asset('front/images/blog/img-13.jpg')}}" alt="image description"></a>
                                    <a class="listar-postcategory" href="{{url('blog/1')}}">Fitness</a>
                                </figure>
                                <div class="listar-postcontent">
                                    <figure class="listar-authorimg"><img src="{{asset('front/images/author/img-01.jpg')}}" height="54" width="54" alt="image description"></figure>
                                    <h2><a href="newsdetail.html">The most common mistakes people make at the gym</a></h2>
                                    <div class="listar-themepostfoot">
                                        <time datetime="2017-08-08">
                                            <i class="icon-clock4"></i>
                                            <span>Apr 22, 2018</span>
                                        </time>
                                        <span class="listar-postcomment">
												<i class="icon-comment"></i>
												<span>3 Comments</span>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <nav class="listar-pagination">
                        <ul>
                            <li class="listar-prevpage"><a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="javascript:void(0);">1</a></li>
                            <li><a href="javascript:void(0);">2</a></li>
                            <li><a href="javascript:void(0);">3</a></li>
                            <li class="listar-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.partials.front.footer')
    <!--************************************
            Footer End
    *************************************-->
    </main>
@endsection
