<section class="listar-sectionspace listar-bglight listar-haslayout">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="listar-sectionhead">
                    <div class="listar-sectiontitle">
                        <h2>Nous Recommandons</h2>
                    </div>
                    <div class="listar-description">
                        <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra doloremque laudantium, totam rem aperiam</p>
                    </div>
                </div>
                <div class="listar-horizontalthemescrollbar">
                    <div class="listar-themeposts listar-categoryposts">
                        <div class="row">
                            @foreach(\App\Ads::all()->take(6) as $ad)
                                {{--{{dd($ad->car())}}--}}
                                <div class="col-md-offset-1 col-md-3">
                                    <div class="listar-themepost listar-placespost">
                                        <figure  class="listar-featuredimg"><span href="detailv1.html">
                                                            @if(count($ad->images()) > 0)
                                                    <img style="height: 285px!important; ; width: 406px !important;" src="{{asset('images/'.$ad->images()[0]->filename)}}" alt="image description" class="mCS_img_loaded">
                                                @else
                                                    <img style="height: 285px!important; ; width: 406px !important;" src="{{asset('dashboard/images/prop1.jpeg')}}" alt="image description" class="mCS_img_loaded">
                                                @endif

                                                        </span></figure>
                                        <div class="listar-postcontent" >
                                                        <span  class="ad_num" style="border: solid #2457cf 2px ;
                                                         border-radius: 20% ; background: #2457cf ;padding-left: 15px; padding-right: 10px; margin-right: 10px; font-size: 30px ; color: #FFFFFF"  >

                                                                {{$ad->id + 50}}
                                                                  </span>
                                            <h3><a href="{{url('all-ads/'.$ad->id)}}">

                                                    {{$ad->title}}</a>


                                            </h3>
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
                                            <div style="margin-top: 2px" class="listar-themepostfoot">
                                                <a class="listar-location" href="javascript:void(0);">
                                                    <i class="icon-icons74"></i>
                                                    <em>{{$ad->subclass()->adr}}</em>
                                                </a>
                                                <div class="listar-postbtns" style="display: flex; justify-content: space-around">
                                                    <a class="listar-btnquickinfo" style="width: 100px ;background: #6ebf18 ; color: #FFFFFF" href="{{url('all-ads/'.$ad->id)}}"><i class="fa fa-eye"></i>Détails</a>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>