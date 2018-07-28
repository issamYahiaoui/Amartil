
@extends('layouts.front_dashboard_layout')

@section('content')
    @if(\Illuminate\Support\Facades\Auth::user())

    <div class="listar-recentactivity">
        <div class="listar-boxtitle">

            <h3> Sujet : {{$message->subject ? $message->subject : "Admin Message"}}  </h3>


        </div>

        <div class="listar-recentactivities">
            <div class="" style="margin: 15px">ENVOYE A : {{$message->created_at }}</div>
            <div class=""  style="margin: 15px" > By Admin</div>
            <a style="margin: 15px;height: 50px" class="listar-btn listar-btngreen" href="{{url('contact')}}">
                <span>Repondre</span>
            </a>
            <hr>
            <div class="" style="margin: 15px"> <strong>Message : </strong></div>
            <div  style="height: 100%" class="listar-reviewarea">
                <ul class="listar-reviews listar-themescrollbar mCustomScrollbar _mCS_2"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">
                            <div class="container">
                                <p>{{$message->message}}</p>
                            </div>
                            <div>

                            </div>
                        </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 164px; max-height: 525px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul>
            </div>

        </div>
       <div class="row">

       </div>

    </div>

    @endif
@endsection
@section('css')
    <style>
        .listar-recentactivity {
            width: 100%;
            float: left;
            padding: 0 15px;
            border-radius: 15px;
        }
    </style>
@endsection