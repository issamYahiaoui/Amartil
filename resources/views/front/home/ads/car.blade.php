@extends('layouts.front_layout')

@section('content')

    <div class="listar-innerbanner" style="background : url({{asset('front/images/parallax/bgparallax-06.jpg')}}) !important ">
        <div class="listar-parallaxcolor listar-innerbannerparallaxcolor">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="listar-innerbannercontent">
                            {{--<div class="listar innerpagesearch">--}}
                            {{--<div class="listar innersearch">--}}

                            {{--<form class="listar-formtheme listar-formsearchlisting">--}}
                            {{--<fieldset >--}}
                            {{--<div class="form-group listar-inputwithicon">--}}
                            {{--<i class="icon-layers"></i>--}}
                            {{--<div class="listar-select">--}}
                            {{--<select id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">--}}
                            {{--<option>Ex: appartement, vehicule , magasin ...</option>--}}
                            {{--@foreach(\App\Category::all() as $category)--}}
                            {{--<option value="{{$category->id}}">{{$category->namw}}</option>--}}
                            {{--@endforeach--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group listar-inputwithicon">--}}
                            {{--<i class="icon-global"></i>--}}
                            {{--<div class="listar-select listar-selectlocation">--}}
                            {{--<select id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">--}}
                            {{--<option>Choose a Location</option>--}}
                            {{--<option>Lahore</option>--}}
                            {{--<option>Bayonne</option>--}}
                            {{--<option>Greenville</option>--}}
                            {{--<option>Manhattan</option>--}}
                            {{--<option>Queens</option>--}}
                            {{--<option>The Heights</option>--}}
                            {{--</select>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group listar-inputwithicon">--}}
                            {{--<i class=""><img src="{{asset('front/images/icons/icon-01.png')}}" alt="image description"></i>--}}
                            {{--<p>Price: </p>--}}
                            {{--<input id="listar-rangeslider" class="listar-rangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">--}}
                            {{--</div>--}}
                            {{--<button type="button" class="listar-btn listar-btngreen">Trouver Annonces</button>--}}
                            {{--</fieldset>--}}
                            {{--</form>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="listar-pagetitle">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main id="listar-main"  style="background: #FFFFFF" class="listar-main  listar-haslayout">
            <div class="listar-themepost listar-placespost listar-detail listar-detailvone">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="listar-postcontent">
                                <h1>{{$model->ads()->title}}<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h1>
                                <br><br>
                                <div class="listar-reviewcategory">
                                    <div class="">
                                        <h3 style="color:#5c5c5c;">Category name</h3>
                                    </div>

                                </div>
                                <div class="listar-themepostfoot">
                                    <ul>
                                        <li>
                                            <i class="icon-telephone114"></i>
                                            <span>{{$model->ads()->owner_phone}} Phone</span>
                                        </li>
                                        <li>
                                            <i class="icon-icons74"></i>
                                            <span>{{$model->adr}} Address</span>
                                        </li>
                                        <li style="color: gold ; font-size: 22px">
                                            <i class="fa fa-money"></i>
                                            <span>{{$model->price}} Price - <span>{{$model->format_price}}</span></span>
                                        </li>
                                        @if($model->ads()->video_url)
                                            <li>
                                                <i class="icon-global"></i>
                                                <span><a href="{{$model->ads()->video_url}}">Lien de la video</a></span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="listar-themetabs">
                                <ul class="listar-themetabnav" role="tablist">
                                    <li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
                                    <li role="presentation"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
                                    <li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
                                </ul>
                                <div class="tab-content listar-themetabcontent">
                                    <div role="tabpanel" class="tab-pane active listar-overview" id="overview">
                                        <div class="listar-leftbox">
                                            <h3>Description</h3>
                                            <br>
                                            {!!  $model->description !!}
                                            <div class="listar-videobox">
                                                {{--<iframe src="https://player.vimeo.com/video/234265016?byline=0&portrait=0"></iframe>--}}
                                                @if($model->ads()->video_url)
                                                    <iframe src="{{$model->ads()->video_url}}"></iframe>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="listar-rightbox">
                                            <div class="listar-amenitiesarea">
                                                <div class="listar-title">
                                                    <h3>Basic Information</h3>
                                                </div>
                                                <div class="infos">
                                                    <div class="row">
                                                        <div class="col-md-6">Titre de l'annonce </div>
                                                        <div class="col-md-6">{{$model->ads()->title}}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">Categorie de l'annonce</div>
                                                        <div class="col-md-6">Categorie</div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-md-6">Phone</div>
                                                        <div class="col-md-6">{{$model->ads()->owner_phone}}</div>
                                                    </div>
                                                    <hr>



                                                    <div class="row">
                                                        <div class="col-md-6">Type de l'annonceur</div>
                                                        <div class="col-md-6">{{$model->is_owner}}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">Vehicule</div>
                                                        <div class="col-md-6">{{$model->car}}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">Modele du vehicule</div>
                                                        <div class="col-md-6">{{$model->car_model}}</div>
                                                    </div>
                                                    <hr>


                                                    <div class="row">
                                                        <div class="col-md-6">Mesure de securite</div>
                                                        <div class="col-md-6">{{$model->safety}}</div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-md-6">Fuel TYpe</div>
                                                        <div class="col-md-6">{{$model->fuel_type}}</div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-md-6">Kilometrage</div>
                                                        <div class="col-md-6">{{$model->mileage}}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">Kilometrage</div>
                                                        <div class="col-md-6">{{$model->mileage}}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">Fiscal power</div>
                                                        <div class="col-md-6">{{$model->fiscal_power}}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">Couleur</div>
                                                        <div class="col-md-6">{{$model->color}}</div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">Nombre de cylindres</div>
                                                        <div class="col-md-6">{{$model->nbr_cylindre}}</div>
                                                    </div>
                                                    <hr>

                                                    <div class="row">
                                                        <div class="col-md-6">Annee</div>
                                                        <div class="col-md-6"> {{$model->year}}120</div>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane listar-addressmaplocation" id="location">
                                        <div id="listar-postlocationmap" class="listar-postlocationmap"></div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="gallery">
                                        <div id="listar-postgallery" class="listar-postgallery">


                                            @if($model->ads()->images())
                                                @foreach($model->ads()->images() as $img)
                                                    <img src="{{asset('images/'.$img->filename)}}" alt="image description">
                                                    <div class="listar-masnory"><figure><a  data-rel="prettyPhoto[gallery]"><img src="{{asset('images/'.$img->filename)}}" alt="image description"></a></figure></div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    <style>
        /*.listar-header {*/
        /*z-index: 100;*/
        /*padding: 15px 0;*/
        /*background: #fff !important;*/
        /*position: relative;*/
        /*text-align: center;*/
        /*-webkit-box-shadow: 0 0 15px 0 rgba(0,0,0,0.10);*/
        /*box-shadow: 0 0 15px 0 rgba(0,0,0,0.10);*/
        /*}*/
        /*.nav-black > li > a{color: #222 !important;}*/
        .listar-formsearchlisting .form-group {
            margin: 0;
            float: left;
            width: 33.33% !important;
        }
        @media (max-width: 800px){
            .listar-formsearchlisting .form-group {
                border: 0;
                padding: 0;
                width: 100% !important;
            }
        }
        .infos div{


            padding: 5px;
        }
        .info div .row {
            display: flex;
            justify-content: space-between;
        }

    </style>

@endsection

