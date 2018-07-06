<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
