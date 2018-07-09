@extends('layouts.front_dashboard_layout')

@section('content')
    <div class="row">
        <form class="listar-formtheme listar-formaddlisting listar-formwishlist">
            <fieldset>
                <div class="listar-boxtitle">
                    <h3>Mes Annonces</h3>

                </div>

                <div class="listar-dashboardwishlists tab-content">

                    <div role="tabpanel" class="tab-pane active" id="profile">
                        @foreach(\App\Ads::all() as $ads)
                        <div class="listar-themepost listar-placespost">
                            <a class="listar-btnedite" href="{{url('u/edit-ad/'.$ads->id)}}"><i class="icon-pencil4"></i></a>
                            <a class="listar-btndelpost" href="javascript:void(0);">x</a>
                            <figure class="listar-featuredimg"><a href="{{url('all-ads/'.$ads->id)}}"><img src="{{asset('front/images/post/img-28.jpg')}}" alt="image description" class="mCS_img_loaded"></a></figure>
                            <div class="listar-postcontent">
                                <h3><a href="{{url('all-ads/'.$ads->id)}}" >{{$ads->title}}</a></h3>
                                <span class="listar-catagory">Category name</span>

                                <span class="listar-catagory" > <i class="fa fa-money"></i><span style="color: gold">{{$ads->subclass()->price}} Price</span> </span>
                                <div class="listar-reviewcategory">
                                    <div class="listar-review">

                                        <span><i class="fa fa-map-marker"></i> Address</span>

                                    </div>

                                </div>

                            </div>
                        </div>

                        @endforeach

                    </div>

                </div>
            </fieldset>
        </form>
    </div>
@endsection
