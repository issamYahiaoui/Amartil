@extends('layouts.front_dashboard_layout')

@section('content')



     <div id="listar-content" class="listar-content">
          <form class="listar-formtheme listar-formaddlisting listar-formwishlist">
               <fieldset>
                    <div class="listar-boxtitle">
                         <h3>Choisissez Une Categorie d'annonce</h3>
                    </div>
                   @if(\Illuminate\Support\Facades\Auth::user()->ads_limit > count(\Illuminate\Support\Facades\Auth::user()->ads()))
                         <div class="listar-dashboardwishlists">
                              <div class="listar-themepost listar-placespost">

                                   <figure class="listar-featuredimg"><a href="javascript:void(0);"><img src="https://s-ec.bstatic.com/images/hotel/max1024x768/541/54198130.jpg" alt="image description" class="mCS_img_loaded"></a></figure>
                                   <div class="listar-postcontent">
                                        <h3><a href="{{url('u/add-ad/apartment')}}">Appartements et Maisons</a></h3>
                                        <span class="listar-catagory">Ajouter une annonce sur les Appartments</span>

                                   </div>
                              </div>
                              <div class="listar-themepost listar-placespost">

                                   <figure class="listar-featuredimg"><a href="javascript:void(0);"><img src="data:image/jpeg;base64,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" alt="image description" class="mCS_img_loaded"></a></figure>
                                   <div class="listar-postcontent">
                                        <h3><a href="{{url('u/add-ad/car')}}">Vehicule</a></h3>
                                        <span class="listar-catagory">Ajouter une annonce sur les vehicules</span>

                                   </div>
                              </div>

                              <div class="listar-themepost listar-placespost">

                                   <figure class="listar-featuredimg"><a href="javascript:void(0);"><img src="https://www.spaceotechnologies.com/wp-content/uploads/2016/01/35152412.jpg" alt="image description" class="mCS_img_loaded"></a></figure>
                                   <div class="listar-postcontent">
                                        <h3><a href="{{url('u/add-ad/other')}}">Autres</a></h3>
                                        <span class="listar-catagory">Ajouter une annonce sur autres proprietes</span>

                                   </div>
                              </div>



                         </div>
                    @else
                      <div class="row justify-content-center"  style="display: flex ; justify-content: center ;color: red ; font-size: 20px ; margin-top:5% ;width: 100% ; height: 100px">
                           Vous avez depasser la limite des annoces authorisee pour votre compte

                      </div>

                        @endif
                    <div class="listar-dashboardwishlists">


                    </div>


               </fieldset>
          </form>
     </div>

@endsection
@section('css')
     <style>
          .listar-addlistingsteps .steps ul li {
               float: left;
               z-index: 1;
               width: 33.33%;
               position: relative;
               list-style-type: none;
          }
          img{
               width: 167px !important;
               height: 135px !important;
          }
     </style>
     @endsection
@section('js')

     @endsection

