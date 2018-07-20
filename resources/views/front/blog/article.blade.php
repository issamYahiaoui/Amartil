

@extends('layouts.front_layout')

@section('content')
    <!--************************************
            Header Start
    *************************************-->
    @include('layouts.partials.front.header')


    <main id="listar-main" class="listar-main listar-haslayout">
        <div id="listar-twocolumns" class="listar-twocolumns">
            <div class="listar-themepost listar-post listar-detail listar-postdetail">
                <figure style="max-height: 600px" class="listar-featuredimg">
                    <img  style="height: 406px!important;" src="{{asset('images/'.$model->img_url)}}" alt="image description">
                    <figcaption>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="listar-postcontent">
                                        <div class="listar-postauthordpname">
                                            <span class="listar-postauthordp"><a href="javascript:void(0);"><img src="{{asset('front/images/author/img-01.jpg')}}" alt="image description"></a></span>
                                            <span class="listar-postauhorname"><a href="javascript:void(0);">{{\App\User::adminName()}}</a></span>
                                        </div>
                                        <time datetime="2017-08-08">
                                            <i class="icon-clock4"></i>
                                            <span>{{$model->created_at}}</span>
                                        </time>
                                        <span class="listar-postcomment">
												<i class="icon-comment"></i>
												<span>{{count($model->comments())}} comments</span>
											</span>

                                        <h1>{{$model->title}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <div class="clearfix"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-push-1 col-md-10 col-lg-push-1 col-lg-10">
                            <div id="listar-detailcontent" class="listar-detailcontent">
                                <div class="listar-heading listar-headingvtwo">
                                    <h2>Article Description</h2>
                                </div>
                                <div class="listar-description">
                                    {!! $model->content !!}
                                </div>

                                <section class="listar-comments">
                                    <div class="listar-heading listar-headingvtwo">
                                        <h2>{{count($model->comments()) }} Responses</h2>
                                    </div>
                                    <ul id="listar-comments" class="listar-comments">
                                       @foreach($model->comments() as $comment)
                                            <li>
                                                <div class="listar-comment">
                                                    <figure><img src="{{asset('front/images/author/img-02.jpg')}}" alt="image description"></figure>
                                                    <div class="listar-content">
                                                        <div class="listar-commenthead">
                                                            <div class="listar-author">
                                                                <h3>{{$comment->user()->name}}</h3>
                                                                <time datetime="2017-12-12">{{$comment->created_at}}</time>
                                                            </div>
                                                            {{--<a class="listar-reply" href="javascript:void(0);">Repondre</a>--}}
                                                        </div>
                                                        <div class="listar-description">
                                                            <p>{{$comment->content}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                           @endforeach

                                    </ul>
                                </section>

                                @if(\Illuminate\Support\Facades\Auth::user())

                                    <section class="listar-formreviewarea">
                                        <form action="{{url('comments')}}" method="POST" class="listar-formtheme listar-formaddreview">
                                            @csrf
                                            <fieldset hidden>
                                                <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->id}}" name="user_id" hidden>
                                                <input type="text" name="article_id" value="{{$model->id}}" hidden>
                                            </fieldset>
                                            <fieldset>
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="form-group">
                                                            <textarea name="content" class="form-control" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <button class="listar-btn listar-btngreen" type="submit">Poster Commentaire</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </section>
                                @else
                                    <section class="listar-formreviewarea">
                                        <h5>Vous devez vous inscrire pour pouvoir poster un commentaire</h5>
                                    </section>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.partials.front.footer')
    <!--************************************
            Footer End
    *************************************-->
    </main>
@endsection
