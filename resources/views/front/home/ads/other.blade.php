@extends('layouts.front_layout')

@section('content')

    <div class="listar-innerbanner" style="background : url({{asset('front/images/parallax/bgparallax-06.jpg')}}) !important ">
        <div class="listar-parallaxcolor listar-innerbannerparallaxcolor">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="listar-innerbannercontent">

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
                            <div class="listar-postcontent" >
                                <h1>{{$model->ads()->title}}<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h1>
                                <br><br>
                                <div class="listar-reviewcategory">
                                    <div class="">
                                        <h5 style="color:#5c5c5c;">{{$category}}</h5>
                                    </div>

                                </div>
                                <div class="listar-themepostfoot">
                                    <ul>
                                        <li>
                                            <i class="icon-telephone114"></i>
                                            <span>{{\App\User::adminPhone()}}</span>
                                        </li>
                                        <li>
                                            <i class="icon-icons74"></i>
                                            <span>{{$model->adr}}</span>
                                        </li>
                                        <li style="color: gold ; font-size: 22px">
                                            <i class="fa fa-money"></i>
                                            <span>{{$model->price}} DM - <span>{{$model->format_price}}</span></span>
                                        </li>
                                        @if($model->ads()->video_url)
                                            <li>
                                                <i class="icon-global"></i>
                                                <span><a href="{{$model->ads()->video_url}}">Lien de la video</a></span>
                                            </li>
                                        @endif
                                        <li >
                                            <i class="fa fa-eye"></i>
                                            <span>{{$model->ads()->vue}} Vues</span>
                                        </li>
                                    </ul>
                                </div>
                                <hr>
                                <div class="info-container">

                                    <div class="show-ad">

                                        <section>
                                            <div class="row">
                                                <div class="gallery">
                                                    @if(count($model->ads()->images()) > 0)

                                                        <img  width="50%" class="xzoom" src="{{asset('images/'.$model->ads()->images()[0]->filename)}}" xoriginal="{{asset('images/'.$model->ads()->images()[0]->filename)}}" />
                                                    @else
                                                        <img  width="50%" class="xzoom"  src="{{asset('images/empty-image.png')}}" xoriginal="{{asset('images/'.$model->ads()->images()[0]->filename)}}" />

                                                    @endif

                                                    <br> <br>
                                                    <div class="xzoom-thumbs">

                                                        @if(count($model->ads()->images()) > 0)
                                                            @foreach($model->ads()->images() as $img)
                                                                <a href="{{asset('images/'.$img->filename)}}">
                                                                    <img class="xzoom-gallery" width="80" src="{{asset('images/'.$img->filename)}}"  >
                                                                </a>
                                                            @endforeach
                                                        @endif

                                                    </div>


                                                </div>
                                            </div>
                                        </section>
                                        <hr>
                                        <section>

                                            <br> <br>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h3>Description</h3>
                                                    <br> <br> <br>
                                                    <div class="description">

                                                        <div class="">

                                                            <br>

                                                            {!!  $model->description !!}


                                                            <br> <br>

                                                            <br> <br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="location">
                                                        <div id="googleMap" style="width:100%;height:400px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="infos">
                                                <div class="row">
                                                    <div class="col-md-6">Titre de l'annonce </div>
                                                    <div class="col-md-6">{{$model->ads()->title}}</div>
                                                </div>
                                                <hr>
                                                @if($category)

                                                    <div class="row">
                                                        <div class="col-md-6">Categorie de l'annonce</div>
                                                        <div class="col-md-6">{{$category}}</div>
                                                    </div>
                                                    <hr>
                                                @endif
                                                <hr>

                                                <div class="row">
                                                    <div class="col-md-6">Phone</div>
                                                    <div class="col-md-6">{{$model->ads()->owner_phone}}</div>
                                                </div>
                                                <hr>






                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                            <br> <br> <br>
                            {{--<section class="listar-sectionspace listar-bglight listar-haslayout">--}}
                            {{--<div class="container">--}}
                            {{--<div class="row">--}}
                            {{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
                            {{--<div class="listar-sectionhead">--}}
                            {{--<div class="listar-sectiontitle">--}}
                            {{--<h2>A Decouvrir Aussi</h2>--}}
                            {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="listar-horizontalthemescrollbar">--}}
                            {{--<div class="listar-themeposts listar-categoryposts">--}}
                            {{--<div class="row">--}}
                            {{--@foreach(\App\Ads::all() as $ad)--}}
                            {{--{{dd($ad->car())}}--}}
                            {{--<div class="col-md-offset-1 col-md-3">--}}
                            {{--<div class="listar-themepost listar-placespost">--}}
                            {{--<figure style="height: 285px!important; ; width: 406px !important;" class="listar-featuredimg"><span href="detailv1.html">--}}
                            {{--@if(count($ad->images()) > 0)--}}
                            {{--<img src="{{asset('images/'.$ad->images()[0]->filename)}}" alt="image description" class="mCS_img_loaded">--}}
                            {{--@else--}}
                            {{--<img  src="{{asset('dashboard/images/prop1.jpeg')}}" alt="image description" class="mCS_img_loaded">--}}
                            {{--@endif--}}

                            {{--</span></figure>--}}
                            {{--<div class="listar-postcontent" >--}}
                            {{--<span  class="ad_num" style="border: solid #2457cf 2px ;--}}
                            {{--border-radius: 20% ; background: #2457cf ;padding-left: 15px; padding-right: 10px; margin-right: 10px; font-size: 30px ; color: #FFFFFF"  >--}}

                            {{--{{$ad->id + 50}}--}}
                            {{--</span>--}}
                            {{--<h3><a href="{{url('all-ads/'.$ad->id)}}">--}}

                            {{--{{$ad->title}}</a>--}}


                            {{--</h3>--}}
                            {{--<br> <br>--}}
                            {{--<div class="listar-reviewcategory">--}}
                            {{--<div  style="font-size: 15px" class="listar-review">--}}

                            {{--{!!  $ad->category()  !!}--}}
                            {{--</div>--}}
                            {{--<a style="font-size: 25px ; color: #ffa127" class="listar-category">--}}
                            {{--<i class="icon-coin-dollar"></i>--}}
                            {{--<span >{{$ad->subclass()->price}} DM</span>--}}
                            {{--</a>--}}
                            {{--</div>--}}


                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--@endforeach--}}
                            {{--</div>--}}

                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</section>--}}



                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <style>

        .listar-formsearchlisting .form-group {
            margin: 0;
            float: left;
            width: 33.33% !important;
        }
        h3{
            color: black !important;
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCis4vluMHt3WRX1tQlC4955sbgzNSbEnc&libraries=places"
            async defer></script>
    <style type="text/css">
        .input-controls {
            margin-top: 10px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        }
        #searchInput {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            margin-left: 12px;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 50%;
        }
        #searchInput:focus {
            border-color: #4d90fe;
        }
        .info-container{
            margin: 5px !important;
            padding: 5px!important;
        }
    </style>

@endsection
@section('js')
    <script>
        $(document).ready(function(){
            console.log('gallery is on')
            $(".xzoom, .xzoom-gallery").xzoom();
        });
    </script>

    <script>
        var lat = "{{$model->lat}}"
        var lng = "{{$model->lng}}"

        $(function () {
            var mapProp= {
                center:new google.maps.LatLng(lat,lng),
                zoom:5,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker({position: {lat:lat , lng : lng}, map: map});
            console.log('marker',marker)
        })
    </script>

@endsection
