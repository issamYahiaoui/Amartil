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
                        @foreach(\App\Ads::where('customer_id',\Illuminate\Support\Facades\Auth::user()->id)->get() as $ads)
                        <div class="listar-themepost listar-placespost">
                            <a class="listar-btnedite" href="{{url('u/edit-ad/'.$ads->id)}}"><i class="icon-pencil4"></i></a>
                            <a class="listar-btndelpost" href="javascript:void(0);">x</a>
                            <figure class="listar-featuredimg"><a href="{{url('all-ads/'.$ads->id)}}">
                                    @if(count($ads->images()) > 0)
                                        <img style="width: 167px !important; height: 135px !important;" src="{{asset('images/'.$ads->images()[0]->filename)}}" alt="image description" class="mCS_img_loaded">
                                    @else
                                        <img  src="{{asset('dashboard/images/img-28.jpeg')}}" alt="image description" class="mCS_img_loaded">
                                    @endif
                                </a></figure>
                            <div class="listar-postcontent">
                                <h3><a href="{{url('all-ads/'.$ads->id)}}" >{{$ads->title}}</a></h3>
                                <span class="listar-catagory">{!! $ads->category() !!}</span>

                                <span class="listar-catagory" > <i class="fa fa-money"></i><span style="color: gold">{{$ads->subclass()->price}} DM</span> </span>
                                <div class="listar-reviewcategory">
                                    <div class="listar-review">

                                        <span><i class="fa fa-map-marker"></i> {{$ads->subclass()->adr}}</span>

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
