<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;
use App\Ads;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['store']);
        $this->middleware('customer')->except(['store']);

    }
    public function index()
    {
        //

    }

    public function dashboard(){
        return view('front.dashboard.index') ;
    }
    public function profile(){
        return view('front.dashboard.profile',[
            'title' => 'Profile' ,
            'model' => Auth::user()
        ]) ;
    }
    public function ads(){
        return view('front.dashboard.ads.list') ;
    }
    public function addAd(){
    return view('front.dashboard.ads.add') ;
}
    public function addAdType($type){
        switch ($type){
            case 'apartment' : {

                return view('front.dashboard.ads.add.apartment') ;
            }
            case 'car' : {
                return view('front.dashboard.ads.add.car') ;
            }
            case 'other' : {
                return view('front.dashboard.ads.add.other') ;
            }

        }

    }



    public function editAd($id)
    {
        //
        $ads = Ads::find($id) ;
        if (!$ads) abort(404) ;
        $view_name = null  ; $model = null  ;
        if ($ads->apartment()){
            $view_name = "front.dashboard.ads.edit.apartment" ;
            $model = $ads->apartment() ;
        } else {
            if ($ads->car()) {
                $view_name = "front.dashboard.ads.edit.car" ;
                $model = $ads->car() ;

            }elseif ($ads->other()){
                $view_name = "front.dashboard.ads.edit.other" ;
                $model = $ads->other() ;
            }
        }

        return view($view_name,[
            'model' => $model ,
            'title' => 'ads' ,
            'active' => 'ads'
        ]) ;
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'email' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ];

        $this->validate($request, $rules);
        if (User::where('email',$request->get('email'))->first())  return Redirect::back()->withErrors([
            'email' => 'Email address already exists'
        ]) ;
        $user =  User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'role' => 'customer',
            'active' => 1,
            'password' => bcrypt($request->get('password')),

        ]);


        Session::Flash('success',"Operation has successfully finished");
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
