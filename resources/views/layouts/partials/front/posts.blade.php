<section class="listar-sectionspace listar-haslayout listar-bglight">
    <div class="container">
        <div class="listar-horizontalthemescrollbar mCustomScrollbar _mCS_2">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="listar-sectionhead">
                        <div class="listar-sectiontitle">
                            <h2>Les dernieres publications</h2>
                        </div>
                        <div class="listar-description">
                            <p>Checkez les derniers articles de  <a class="listar-bluethemecolor" href="{{url('blog')}}">Our Blog</a></p>
                        </div>
                    </div>
                </div>
                <div class="listar-themeposts listar-blogposts">


                    @foreach(\App\Article::all()->take(3) as $article)
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="listar-themepost listar-post">
                                <figure class="listar-featuredimg">
                                    <a href="{{url('blog/'.$article->id)}}"><img style="height: 285px!important; ; width: 406px !important;" src="{{asset('images/blog/'.$article->img_url)}}" alt="image description"></a>
                                    <a class="listar-postcategory" href="{{url('blog/'.$article->id)}}">{{$article->tag}}</a>
                                </figure>
                                <div class="listar-postcontent">
                                    <figure class="listar-authorimg"><img src="{{asset('images/avatar.png')}}" height="54" width="54" alt="image description"></figure>
                                    <h2><a href="{{url('blog/'.$article->id)}}">{{$article->title}}</a></h2>
                                    <div class="listar-themepostfoot">
                                        <time datetime="2017-08-08">
                                            <i class="icon-clock4"></i>
                                            <span>{{$article->created_at}}</span>
                                        </time>
                                        <span class="listar-postcomment">
												<i class="icon-comment"></i>
												<span>{{count($article->comments())}} comments</span>
											</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>