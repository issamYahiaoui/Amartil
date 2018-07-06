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
                            @foreach( \App\Ads::all() as $ad)

                                <div class="col-md-4">
                                    <div class="listar-themepost listar-placespost ">
                                        <figure class="listar-featuredimg"><a href="detailv2.html"><img src="{{asset('images/'.$ad->images()[0]->filename)}}" alt="image description" class="mCS_img_loaded"></a></figure>
                                        <div class="listar-postcontent">
                                            <h3><a href="detailv2.html">{{$ad->title}}</a></h3>

                                            <div class="listar-reviewcategory">
                                                <div class="listar-review">
                                                    {{$ad->category()? $ad->category()->name : "Category Name" }}
                                                </div>
                                                <a href="listingv1.html" class="listar-category">
                                                    <i class="icon-coin-dollar"></i>
                                                    <span>{{$ad->apartment() ? $ad->apartment()->price : $ad->car()? $ad->car()->price : "Price"}}</span>
                                                </a>
                                            </div>
                                            <div class="listar-themepostfoot">
                                                <a class="listar-location" href="javascript:void(0);">
                                                    <i class="icon-icons74"></i>
                                                    <em>{{$ad->apartment() ? $ad->apartment()->adr : $ad->car() ? $ad->car()->adr : "Address"}}</em>
                                                </a>
                                                <div class="listar-postbtns">
                                                    <a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
                                                    <a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
                                                    <div class="listar-btnquickinfo">
                                                        <div class="listar-shareicons">
                                                            <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                                            <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                                            <a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
                                                        </div>
                                                        <a class="listar-btnshare" href="javascript:void(0);">
                                                            <i class="icon-share3"></i>
                                                        </a>
                                                    </div>
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