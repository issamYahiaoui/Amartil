<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');



    }
    public function index()
    {
        //

    }

    public function dashboard(){
        return view('front.dashboard.index') ;
    }
    public function profile(){
        return view('front.dashboard.profile') ;
    }
    public function ads(){
        return view('front.dashboard.ads.list') ;
    }
    public function addAd(){
    return view('front.dashboard.ads.add') ;
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
            'password' => 'required|string|min:6|confirmed',
        ];

        $this->validate($request, $rules);
        if (User::where('email',$request->get('email'))->first()) abort(404) ;
        $user =  User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'role' => 'customer',
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
