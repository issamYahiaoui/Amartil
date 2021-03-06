@extends('layouts.front_layout')

@section('content')
    <div class="listar-innerbanner" style="background : url({{asset('front/images/parallax/bgparallax-06.jpg')}}) !important ">
        <div class="listar-parallaxcolor listar-innerbannerparallaxcolor">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="listar-innerbannercontent">
                            <div class="listar innerpagesearch">
                                <div class="listar innersearch">

                                    <form class="listar-formtheme listar-formsearchlisting">
                                        <fieldset >
                                            <div class="form-group listar-inputwithicon">
                                                <i class="icon-search" style="color: #8c8c8c;" ></i>
                                                <div class="" >
                                                    <input placeholder="Que cherchez vous ?" style="width: 100% ; border: none!important; padding-left: 15% ; padding-top: 8%;color: #8c8c8c;
    font-size: 12px;
    line-height: 60px; " name="query" type="text" >
                                                </div>
                                            </div>

                                            <div class="form-group listar-inputwithicon">
                                                <i class="icon-layers"></i>
                                                <div class="listar-select">
                                                    <select name="category_id" id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
                                                        <option value="*">Choisir une categorie</option>
                                                        <option value="*">Tous les categories</option>


                                                        @foreach(\App\Category::all() as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>>
                                            </div>
                                            <div class="form-group listar-inputwithicon">
                                                <i class="icon-global"></i>
                                                <div class="listar-select listar-selectlocation">
                                                    <select name="adr" id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">
                                                        <option value="*">Choisir une ville</option>
                                                        <option value="*">Tous le Maroc</option>


                                                        @foreach($locations as $location)
                                                            <option value="{{$location}}">{{$location}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <button type="submit" class="listar-btn listar-btngreen">Trouver Annonces</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="listar-pagetitle">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <main class="listar-main listar-innerspeace listar-bglight listar-haslayout"
      {{--style=" padding-top: 10%"--}}
>

    <div id="listar-wrapper" class="listar-wrapper listar-haslayout">

        <main id="listar-main" class=" listar-bglightlistar-main listar-haslayout">

            <div id="listar-content" class="listar-content"  >
                <div class="listar-listing" >

                    <div class="container "  >
                        <div class="row">
                            <div class="listar-listingarea">
                                <div class="listar-searchstatus"><h1><span>Results </span>  <strong>({{count($list)}})</strong></h1></div>

                                <br> <br>
                                <div class="listar-themeposts listar-placesposts listar-listview">
                                    <div class="row ">
                                        @foreach($list as $ad)
                                            {{--{{dd($ad->car())}}--}}
                                            <div class="col-md-offset-1 col-md-10">
                                                <div class="listar-themepost listar-placespost">
                                                    <a  href="{{url('all-ads/'.$ad->id)}}">
                                                        <figure style="max-height: 315px" class="listar-featuredimg"><span href="detailv1.html">

                                                                 @if(count($ad->images()) > 0)
                                                                    <img src="{{asset('images/'.$ad->images()[0]->filename)}}" alt="image description" class="mCS_img_loaded">
                                                                @else
                                                                    <img  src="{{asset('images/empty-image.png')}}" alt="image description" class="mCS_img_loaded">
                                                                @endif

                                                        </span></figure>
                                                    </a>

                                                    <div class="listar-postcontent" >
                                                        <span class="ad_num" style="border: solid #2457cf 2px ;
                                                         border-radius: 20% ; background: #2457cf ;padding-left: 15px; padding-right: 10px; margin-right: 10px; font-size: 30px ; color: #FFFFFF">

                                                               {{$ad->id + 50}}
                                                                  </span>

                                                        <h3><a href="{{url('all-ads/'.$ad->id)}}">

                                                                {{$ad->title}} - <span style="color: red">{{$ad->active? "" : "Non Disponible"}}</span></a>



                                                        </h3>
                                                        @if($ad->featured)
                                                        <span style="position: absolute; right: 0px ; top: 5px ; background: #6ebf18 ; color: white ;    width: 70px;height: 25px;border-radius: 10%; padding-left: 5px;">
                                                            Featured
                                                        </span>
                                                        @endif
                                                        <br> <br>
                                                        <div class="listar-reviewcategory">
                                                            <div  style="font-size: 15px" class="listar-review">

                                                                 {!!  $ad->category()  !!}
                                                            </div>
                                                            <a style="font-size: 25px ; color: #ffa127" class="listar-category">
                                                                <i class="icon-coin-dollar"></i>
                                                                <span >{{$ad->subclass()->price}} DM</span>
                                                            </a>
                                                        </div>
                                                        <div  class="listar-description" style="height: 137px!important;">

                                                            <p>
                                                                {!! substr($ad->subclass()->description, 0, 200) !!}
                                                            </p>

                                                        </div>
                                                        <div style="margin-top: 2px" class="listar-themepostfoot">
                                                            <a class="listar-location" href="javascript:void(0);">
                                                                <i class="icon-icons74"></i>
                                                                <em>{{$ad->subclass()->adr }}</em>
                                                            </a>
                                                            <div class="listar-postbtns" style="display: flex; justify-content: space-around">
                                                                <a class="listar-btnquickinfo"  style="width: 100px ;background: #6ebf18 ; color: #FFFFFF" href="{{url('all-ads/'.$ad->id)}}"><i class="fa fa-eye"></i>Détails</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>






                                    {{--<nav class="listar-pagination">--}}
                                        {{--<ul>--}}
                                            {{--<li class="listar-prevpage"><a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a></li>--}}
                                            {{--<li class="listar-active"><a href="javascript:void(0);">1</a></li>--}}
                                            {{--<li><a href="javascript:void(0);">2</a></li>--}}
                                            {{--<li><a href="javascript:void(0);">3</a></li>--}}
                                            {{--<li class="listar-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</nav>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>


</main>
    </div>

@endsection



@section('css')
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




            </style>
@endsection