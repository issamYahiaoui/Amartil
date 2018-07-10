@extends('layouts.front_dashboard_layout')

@section('content')


    <div id="listar-content" class="listar-content">
        <form class="listar-formtheme listar-formaddlisting listar-formdashboard">
            <div class="row">
                <fieldset class="listar-statisticsarea">
                    <ul class="listar-statistics " style="display: flex ; justify-content: space-around">
                        <li class="listar-newuser">
                            <div class="listar-couterholder">
                                <h3 data-from="0" data-to="{{count(\App\Ads::where('customer_id',\Illuminate\Support\Facades\Auth::user()->id)->get())}}" data-speed="8000" data-refresh-interval="50">315</h3>
                                <h4>Mes annonces</h4>
                                <div class="listar-statisticicon"><i class="icon-map2"></i></div>
                            </div>
                        </li>
                        <li class="listar-newfeedback">
                            <div class="listar-couterholder">
                                <h3 data-from="0" data-to="{{count(\App\Ads::all())}}" data-speed="8000" data-refresh-interval="50">38</h3>
                                <h4>Annonces Actives</h4>
                                <div class="listar-statisticicon"><i class="icon-map3"></i></div>
                            </div>
                        </li>

                        <li class="listar-weeksviews">
                            <div class="listar-couterholder">
                                <h3 data-from="0" data-to="{{count(\App\Article::all())}}" data-speed="8000" data-refresh-interval="50">9563</h3>
                                <h4>articles</h4>
                                <div class="listar-statisticicon"><i class="icon-comment"></i></div>
                            </div>
                        </li>

                    </ul>
                </fieldset>

            </div>
        </form>
    </div>
@endsection
