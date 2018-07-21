
@extends('layouts.front_dashboard_layout')

@section('content')
    <div class="listar-recentactivity">
        <div class="listar-boxtitle">
            <h3>Messages</h3>
        </div>
        <div class="listar-recentactivities">
            <div class="listar-reviewarea">
                <ul class="listar-reviews listar-themescrollbar mCustomScrollbar _mCS_2"><div id="mCSB_2" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" tabindex="0" style="max-height: none;"><div id="mCSB_2_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;" dir="ltr">

                           @foreach($messages as $msg)
                               @if($msg->belongsToUser())
                                <li class="listar-starractivity">
                                    <a href="{{url('u/detail/'.$msg->id)}}">
                                        <span> {{$msg->created_at}}</span>
                                        <div class="listar-activitytitle">
                                            <h4>{{$msg->message}}</h4>
                                        </div>
                                        <span>By Admin</span>
                                    </a>

                                </li>
                                @endif
                            @endforeach
                        </div><div id="mCSB_2_scrollbar_vertical" class="mCSB_scrollTools mCSB_2_scrollbar mCS-light mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_2_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 164px; max-height: 525px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul>
            </div>
        </div>
    </div>
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