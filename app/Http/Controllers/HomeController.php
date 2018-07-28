<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;
use App\Ads;
use function Sodium\add;

class HomeController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.home.index',
            [
                'title' => 'Home'
            ]);
    }

    public function contact(){
        return view('front.static-pages.contact') ;
    }
    public function faq(){
        return view('front.static-pages.faq') ;
    }
    public function about(){
        return view('front.static-pages.about') ;
    }
    public function allAds($type){
        $list = null ;
        switch ($type){
            case $type === "all":
                $list = Ads::orderBy('active', 'desc')->get() ;
                break ;
            case $type === "apartments":
                $list = Ads::orderBy('active', 'desc')->join('apartments', 'apartments.ads_id' , '=' , 'ads.id')->select('ads.*')->get();
                break ;
            case $type === "cars":
                $list = Ads::orderBy('active', 'desc')->join('cars', 'cars.ads_id' , '=' , 'ads.id')->select('ads.*')->get();
                break ;
            case $type === "others":
                $list = Ads::orderBy('active', 'desc')->join('others', 'others.ads_id' , '=' , 'ads.id')->select('ads.*')->get();

        }

        return view('front.home.all-ads',[
            'list' => $list
        ]) ;
    }
   function search(Request $request){
//        dd($request->all()) ;
       $query = $request->get('query') ;
       $category = $request->get('category_id') ;
       $location = $request->get('location') ;
      $table = $this->getQueryParam($request) ;

       if( $query != null){
           array_push($table,['title','like', '%'.$query.'%']) ;
       }

               $res1 = Ads::orderBy('active', 'desc')->join('apartments', 'apartments.ads_id' , '=' , 'ads.id')
                   ->where($table)
                   ->get();

               $res2 = Ads::orderBy('active', 'desc')->join('cars', 'cars.ads_id' , '=' , 'ads.id')
                   ->where($table)
                   ->get();

               $res3 = Ads::orderBy('active', 'desc')->join('others', 'others.ads_id' , '=' , 'ads.id')
                   ->where($table)
                   ->get();

            $res = $this->mergeRes($res1,$res2,$res3)->sortBy('category_id')->sortByDesc('active') ;








       $search_params = [
           'query' => $query ,
           'category' => $category ,
           'location' => $location ,
       ] ;


       return view('front.home.all-ads',[
           'list' => $res ,
           'search_params' => $search_params
       ]) ;
     }


     public function mergeRes($res1,$res2,$res3) {
        $res = collect(new Ads());
        $i=0 ;
         foreach ($this->getLongerTab($res1,$res2,$res3) as $t) {
             $res->push($t) ;

         }


        foreach ($res1 as $a ) {

            if(!$this->contain($res,$a)){
              $res->push($a) ;
            }

         }

         foreach ($res2 as $a) {
             if(!$this->contain($res,$a)){
                 $res->push($a) ;

             }
         }

         foreach ($res3 as $a) {

             if(!$this->contain($res,$a)){
                 $res->push($a) ;

             }
         }
         return $res;

     }
     public function contain($res, $a){
        foreach ($res as $r){

            if($r['ads_id'] == $a['ads_id']) {

                return true ;
            }


        }
     }
     public function getLongerTab($a_tab,$b_tab,$c_tab){
        $a = count($a_tab) ;  $b = count($b_tab) ;  $c = count($c_tab) ;
        return $a>$b ? ($a>$c? $a_tab : $c_tab) : ($b>$c ? $b_tab:$c_tab) ;
      }
    public function getQueryParam($request){

        $traceFields = ['category_id'] ;
        $i =0 ;
        foreach ($traceFields as $field) {

            if($request[$field] ==="*") {
                unset($traceFields[$i]) ;
            }
            $i++;
        }
        $res = [] ; $row =[] ;
        $i =0;
        foreach ($traceFields as $field){
            $row[0] = $field ; $row[1]='=' ;  $row[2]= $request[$field] ;
            $res[$i] = $row ;
            $i++;
        }

        return $res;
    }
    public function showAd($id){
        //
        $ads = Ads::find($id) ;
        if (!$ads) abort(404) ;
        $view_name = null  ; $model = null  ; $category = null ;
        if ($ads->apartment()){
            $view_name = "front.home.ads.apartment" ;
            $model = $ads->apartment() ;
            $category = "Apartments" ;



        } else {
            if ($ads->car()) {
                $view_name = "front.home.ads.car" ;
                $model = $ads->car() ;
                $category = "vehicule" ;
                $ads->car()->vue = $ads->car()->vue + 1 ;
                $ads->car()->save() ;

            }elseif ($ads->other()){
                $view_name = "front.home.ads.other" ;
                $model = $ads->other() ;
                $category = "Autres" ;
                $ads->other()->vue = $ads->other()->vue + 1 ;
                $ads->other()->save() ;

            }
        }
        $ads->vue = $ads->vue + 1 ;
        $ads->update();

         return view($view_name,[
            'model' => $model ,
            'title' => 'ads' ,
            'active' => 'ads' ,
            'category' => $category
        ]) ;
    }


    public function storeContact(Request $request){
        $rules = [
            'email' => 'required',
            'name' => 'required',
            'message' => 'required',
            'subject' => 'required',


        ];


        $this->validate($request, $rules);

        $contact =  Contact::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);


        Session::Flash('success',"Operation has successfully finished");
        return Redirect::back();
    }
}
