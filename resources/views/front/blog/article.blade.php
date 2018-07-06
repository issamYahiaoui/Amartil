

@extends('layouts.front_layout')

@section('content')
    <!--************************************
            Header Start
    *************************************-->
    @include('layouts.partials.front.header')


    <main id="listar-main" class="listar-main listar-haslayout">
        <div id="listar-twocolumns" class="listar-twocolumns">
            <div class="listar-themepost listar-post listar-detail listar-postdetail">
                <figure class="listar-featuredimg">
                    <img src="{{asset('front/images/blog/img-22.jpg')}}" alt="image description">
                    <figcaption>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="listar-postcontent">
                                        <div class="listar-postauthordpname">
                                            <span class="listar-postauthordp"><a href="javascript:void(0);"><img src="{{asset('front/images/author/img-05.jpg')}}" alt="image description"></a></span>
                                            <span class="listar-postauhorname"><a href="javascript:void(0);">Johny bravo</a></span>
                                        </div>
                                        <time datetime="2017-08-08">
                                            <i class="icon-clock4"></i>
                                            <span>Apr 22, 2018</span>
                                        </time>
                                        <span class="listar-postcomment">
												<i class="icon-comment"></i>
												<span>3 Comments</span>
											</span>

                                        <h1>We have Lot's of Success Stories</h1>
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
                                <div class="listar-description">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop <a href="javascript:void(0);">publishing packages</a> and web page editors.</p>
                                    <p>Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident on purpose (injected humour and the like).</p>
                                    <h2>All Stunning Places</h2>
                                    <ol class="listar-orderlist">
                                        <li> It is a long established fact that a reader will be distracted by the readable content.</li>
                                        <li> Lorem Ipsum their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have  many web sites still in their infancy.</li>
                                        <li> It is a long established fact that a reader will be distracted by the readable content.</li>
                                    </ol>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution ofevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <blockquote><q>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue laoreet.</q>
                                    </blockquote>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <figure class="listar-imgbox"><img src="{{asset('front/images/blog/img-23.jpg')}}" alt="image description"></figure>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                            <figure class="listar-imgbox"><img src="{{asset('front/images/blog/img-24.jpg')}}" alt="image description"></figure>
                                        </div>
                                    </div>
                                    <h2>Text that where it came from it</h2>
                                    <p>It is a long established fact that a reader will be distracted by the <a href="javascript:void(0);">readable content</a> of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution ofevolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <p></p>
                                </div>
                                <div class="listar-nextprevposts">
                                    <div class="listar-prevpost">
                                        <a href="#">
                                            <i class="fa fa-angle-left"></i><span>Previous Reading</span>
                                            <h2>Get Fit on The Go</h2>
                                        </a>
                                    </div>
                                    <div class="listar-nextpost">
                                        <a href="#">
                                            <span>Next Reading</span><i class="fa fa-angle-right"></i>
                                            <h2>City Tours in Europe</h2>
                                        </a>
                                    </div>
                                </div>
                                <section class="listar-comments">
                                    <div class="listar-heading listar-headingvtwo">
                                        <h2>2 Responses</h2>
                                    </div>
                                    <ul id="listar-comments" class="listar-comments">
                                        <li>
                                            <div class="listar-comment">
                                                <figure><img src="{{asset('front/images/author/img-09.jpg')}}" alt="image description"></figure>
                                                <div class="listar-content">
                                                    <div class="listar-commenthead">
                                                        <div class="listar-author">
                                                            <h3>John Smith</h3>
                                                            <time datetime="2017-12-12">December 21, 2017 at 3:04 pm</time>
                                                        </div>
                                                        <a class="listar-reply" href="javascript:void(0);">reply</a>
                                                    </div>
                                                    <div class="listar-description">
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="listar-comment">
                                                <figure><img src="{{asset('front/images/author/img-09.jpg')}}" alt="image description"></figure>
                                                <div class="listar-content">
                                                    <div class="listar-commenthead">
                                                        <div class="listar-author">
                                                            <h3>John Smith</h3>
                                                            <time datetime="2017-12-12">December 21, 2017 at 3:04 pm</time>
                                                        </div>
                                                        <a class="listar-reply" href="javascript:void(0);">reply</a>
                                                    </div>
                                                    <div class="listar-description">
                                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                                <section class="listar-formreviewarea">
                                    <form class="listar-formtheme listar-formaddreview">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="yourname" class="form-control" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="emailaddress" class="form-control" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="form-group">
                                                        <input type="text" name="website" class="form-control" placeholder="Website">
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <textarea name="message" class="form-control" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <button class="listar-btn listar-btngreen" type="button">Post Comment</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </section>
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
