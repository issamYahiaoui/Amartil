@extends('layouts.dashboard_layout')


@section('content')
    <div class="white-box">
        <div class="row">

            <div class="col-md-3 ">
                <div>
                    <a href="{{url('inbox')}}" class="btn btn-custom btn-block waves-effect waves-light">Inbox</a>
                    <div class="list-group mail-list m-t-20">

                        <a href="#" class="list-group-item active">
                            Read
                            <span class="label label-rouded label-success pull-right">
                                        {{$read}}
                                    </span>
                        </a>
                        <a href="#" class="list-group-item">
                            Unread
                            <span class="label label-rouded label-warning pull-right">
                                        {{$unread}}
                                    </span>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-md-8 " style="margin: 10px ;">
                <div class="container">
                    <div class="row">
                        <h4 class="font-bold m-t-0">Subject :  {{$message->subject}}</h4>
                        <hr>

                        <div class="row">
                            <div class="">
                                <span class="">At : {{ date_format(new DateTime($message->created_at),'d M')}}</span>
                                <h4 class="text-danger  ">From : {{$message->from}}</h4>
                                <small class="text-muted">       {{$message->email}}</small>
                            </div>
                        </div>

                    </div>
                    <div class="m-b-30 p-t-20">
                        <h4 class=" text-center">
                            {{$message->message}}
                        </h4>
                    </div>

                </div>
                @if( $message->to == \App\User::adminEmail())
                <a href="#" class="btn btn-info btn-rounded btn-outline text-center center-block" data-toggle="modal" data-target=".reply">Replay</a>
                  @endif
            </div>
        </div>

    </div>


    <div class="modal fade reply" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myLargeModalLabel">{{__('inbox.reply')}}</h4>
                </div>
                <div class="modal-body text-center">
                    <form action="{{url('reply')}}" method="post">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <span>To</span>
                            <input class="form-control" name="to"  value="{{$message->from}}">
                        </div>
                        <div class="form-group">
                            <span>Subject</span>
                            <input class="form-control" name="subject" value="Reply : {{$message->subject}}">
                        </div>
                        <textarea class="textarea_editor form-control" name="message" rows="15"></textarea>
                        <hr>
                        <button type="submit" class="btn btn-info"><i class="fa fa-envelope-o"></i>Send</button>
                        <button data-dismiss="modal" class="btn btn-default"> close</button>
                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



@endsection

@section('js')

    <script src="{{asset('dashboard/node_modules/html5-editor/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('dashboard/node_modules/html5-editor/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $(document).ready(function () {

            $('.textarea_editor').wysihtml5();

        });
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('dashboard/js/custom.min.js')}}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('dashboard/node_modules/html5-editor/bootstrap-wysihtml5.css')}}"/>

@endsection