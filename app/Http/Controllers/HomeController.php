<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;
use App\Ads;
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
                $list = Ads::all() ;
                break ;
            case $type === "apartments":
                $list = Ads::join('apartments', 'apartments.ads_id' , '=' , 'ads.id')->select('ads.*')->get();
                break ;
            case $type === "cars":
                $list = Ads::join('cars', 'cars.ads_id' , '=' , 'ads.id')->select('ads.*')->get();
                break ;
            case $type === "others":
                $list = Ads::join('others', 'others.ads_id' , '=' , 'ads.id')->select('ads.*')->get();

        }

        return view('front.home.all-ads',[
            'list' => $list
        ]) ;
    }
   function search(Request $request){
//        dd($request->all()) ;
       $query = $request->get('query') ;
       $category = $request->get('category') ;
       $location = $request->get('location') ;
      $table = $this->getQueryParam($request) ;
//      dd($table) ;

       $res1 = Ads::join('apartments', 'apartments.ads_id' , '=' , 'ads.id')
           ->where($table)
           ->orWhere('title', 'like' , '%'.$query.'%')
           ->get();

       $res2 = Ads::join('cars', 'cars.ads_id' , '=' , 'ads.id')
           ->where($table)
           ->orWhere('title', 'like' , '%'.$query.'%')
           ->get();


       $res3 = Ads::join('others', 'others.ads_id' , '=' , 'ads.id')
           ->where($table)
           ->orWhere('title', 'like' , '%'.$query.'%')
           ->get();


       $res = $res1->merge($res2)->merge($res3) ;
//       dd($res) ;
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
    public function getQueryParam($request){

        $traceFields = ['adr','category_id'] ;
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
        $view_name = null  ; $model = null  ;
        if ($ads->apartment()){
            $view_name = "front.home.ads.apartment" ;
            $model = $ads->apartment() ;
        } else {
            if ($ads->car()) {
                $view_name = "front.home.ads.car" ;
                $model = $ads->car() ;

            }elseif ($ads->other()){
                $view_name = "front.home.ads.other" ;
                $model = $ads->other() ;
            }
        }

        return view($view_name,[
            'model' => $model ,
            'title' => 'ads' ,
            'active' => 'ads'
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
