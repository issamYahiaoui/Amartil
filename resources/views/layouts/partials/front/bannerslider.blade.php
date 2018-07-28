<div class="listar-homebannerslider">
    <div id="listar-homeslider" class="listar-homeslider owl-carousel">
        @foreach(\App\SettingsPhoto::all() as $photo)
        <div class="item"><figure><img width="100%" src="{{asset('images/slider/'.$photo->filename)}}" alt="image description"></figure></div>
            @endforeach

        {{--<div class="item"><figure><img src="{{asset('front/images/slider/img-03.jpg')}}" alt="image description"></figure></div>--}}
        {{--<div class="item"><figure><img src="{{asset('front/images/slider/img-04.jpg')}}" alt="image description"></figure></div>--}}
        {{--<div class="item"><figure><img src="{{asset('front/images/slider/img-05.jpg')}}" alt="image description"></figure></div>--}}
   {{----}}
    </div>
    <div class="listar-homebanner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="listar-bannercontent">
                        <h1>Trouver Votre Besoin</h1>
                        <div class="listar-description">
                            <p>Trouver les meilleures appartements, vehicules et autres au Maroc</p>
                        </div>
                        <form method="get" action="{{url('search')}}" class="listar-formtheme listar-formsearchlisting">
                            @csrf
                            <fieldset>
                                <div class="form-group listar-inputwithicon">
                                    <i class="icon-search" style="color: #8c8c8c;" ></i>
                                    <div class="" >
                                        <input placeholder="Que cherchez vous ?" style="width: 100% ; border: none!important; padding-left: 15% ; padding-top: 8%;color: #8c8c8c;
    font-size: 12px;
    line-height: 60px; " name="query" type="text" >
                                    </div>
                                </div>
                                <div class="form-group listar-inputwithicon">
                                    <i class="icon-layers"></i>
                                    <div class="listar-select">
                                        <select name="category_id" id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
                                            <option value="*">Choisir une categorie</option>
                                            <option value="*">Tous les categories</option>


                                            @foreach(\App\Category::all() as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group listar-inputwithicon">
                                    <i class="icon-global"></i>
                                    <div class="listar-select listar-selectlocation">
                                        <select name="adr" id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">
                                            <option value="*">Choisir une ville</option>
                                            <option value="*">Tous le Maroc</option>


                                        @foreach($locations as $location)
                                                <option value="{{$location}}">{{$location}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{--<div class="form-group listar-inputwithicon">--}}
                                    {{--<i class=""><img src="{{asset('front/images/icons/icon-01.png')}}" alt="image description"></i>--}}
                                    {{--<p>Price: </p>--}}
                                    {{--<input name="price" id="listar-rangeslider" class="listar-rangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">--}}
                                {{--</div>--}}
                                <button type="submit" class="listar-btn listar-btngreen">Trouver Annonces</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    @media (max-width: 1440px){
        .listar-homeslider .item figure img {
            width: 100%;
            height: 820px;
            max-width: none;
        }
    }
</style>