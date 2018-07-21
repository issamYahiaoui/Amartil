@extends('layouts.dashboard_layout')


@section('content')
    <div class="col-md-12">
        <div class="white-box text-center">
            <form action="{{url('reply')}}" method="post">
                {!! csrf_field() !!}

                <input name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" type="text" hidden>
                <input name="sender" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" type="text" hidden>
                <div class="form-group">
                    <span>To</span>
                    <input class="form-control" name="email" value="{{old('email')}}" >
                </div>
                <div class="form-group">
                    <span>Subject</span>
                    <input class="form-control" name="subject" value="{{old('subject')}}" >
                </div>
                <div class="form-group">
                    <textarea class="textarea_editor form-control" name="message" rows="15" ></textarea>
                </div>
                <hr>
                <button type="submit" class="btn btn-info"><i class="fa fa-envelope-o"></i> Send
                </button>
            </form>
        </div>

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

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('dashboard/node_modules/html5-editor/bootstrap-wysihtml5.css')}}"/>
@endsection