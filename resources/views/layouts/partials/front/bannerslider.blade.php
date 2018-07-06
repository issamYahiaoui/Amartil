<div class="listar-homebannerslider">
    <div id="listar-homeslider" class="listar-homeslider owl-carousel">
        <div class="item"><figure><img src="{{asset('front/images/slider/img-01.jpg')}}" alt="image description"></figure></div>
        <div class="item"><figure><img src="{{asset('front/images/slider/img-02.jpg')}}" alt="image description"></figure></div>
        <div class="item"><figure><img src="{{asset('front/images/slider/img-03.jpg')}}" alt="image description"></figure></div>
        <div class="item"><figure><img src="{{asset('front/images/slider/img-04.jpg')}}" alt="image description"></figure></div>
        <div class="item"><figure><img src="{{asset('front/images/slider/img-05.jpg')}}" alt="image description"></figure></div>
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
                        <form class="listar-formtheme listar-formsearchlisting">
                            <fieldset>
                                <div class="form-group listar-inputwithicon">
                                    <i class="icon-layers"></i>
                                    <div class="listar-select">
                                        <select id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
                                            <option>Ex: appartement, vehicule , magasin ...</option>
                                            @foreach(\App\Category::all() as $category)
                                                <option value="{{$category->id}}">{{$category->namw}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group listar-inputwithicon">
                                    <i class="icon-global"></i>
                                    <div class="listar-select listar-selectlocation">
                                        <select id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">
                                            <option>Choose a Location</option>
                                            <option>Lahore</option>
                                            <option>Bayonne</option>
                                            <option>Greenville</option>
                                            <option>Manhattan</option>
                                            <option>Queens</option>
                                            <option>The Heights</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group listar-inputwithicon">
                                    <i class=""><img src="{{asset('front/images/icons/icon-01.png')}}" alt="image description"></i>
                                    <p>Price: </p>
                                    <input id="listar-rangeslider" class="listar-rangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
                                </div>
                                <button type="button" class="listar-btn listar-btngreen">Trouver Annonces</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>