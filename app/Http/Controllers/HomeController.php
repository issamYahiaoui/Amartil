<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;
use App\Ads;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('guest');
    }

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
    public function allAds(){
        return view('front.home.all-ads') ;
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
