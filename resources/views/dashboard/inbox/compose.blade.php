@extends('layouts.dashboard_layout')


@section('content')
    <div class="col-md-12">
        @if(count($errors->all())>0)
            <div class="alert alert-danger text-center col-md-12 ">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-minus"></i></span>
                </button>
                <ul class="list-unstyled text-center">
                    @foreach($errors->all() as $error)
                        <li class="text-center">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('success'))
            <div id="alert" class="alert alert-success text-center col-md-12">

                {{Session::get('success')}}
                <span class="pull-right" data-dismiss="alert" aria-label="Close" aria-hidden="true"><i
                            class="fa fa-minus"></i></span>
            </div>
        @endif
        <div class="white-box text-center">
            <form action="{{url('reply')}}" method="post">
                {!! csrf_field() !!}


                <div class="form-group">
                    <label>To</label>
                    <select class="form-control" name="to"  >
                        @foreach(\App\User::where('role','customer')->get() as $customer)
                            <option value="{{$customer->email}}">{{$customer->email}} </option>
                         @endforeach
                    </select>
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