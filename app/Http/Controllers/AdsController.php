<?php

namespace App\Http\Controllers;

use App\Ads;
use App\AdsPhoto;
use App\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdsController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $view ="dashboard" ;

        return view($view.'.ads.list',[
            'list'=> Ads::all(),
            'active'=>'ads',
            'title'=> "Ads",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view ="dashboard" ;
        return view($view.'.ads.add',[
            'active'=>'ads',
            'title'=> "Add Ads",

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   dd($request->all()) ;


        $rules = [
//            'title' => 'required',
//            'description' => 'required',
//            'price' => 'required',
        ];
        $rules = [

        ];

        $this->validate($request, $rules);


        $ads =  Ads::create([
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'owner_phone' => $request->get('owner_phone'),
            'adr' => $request->get('adr'),
            'lat' => $request->get('lat'),
            'log' => $request->get('log'),
            'featured' => $request->get('featured') ? 1:0,

            'category_id' => $request->get('category_id'),
            'customer_id' => Auth::user()->id ,

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
    public function show()
    {


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
        $ads = Ads::find($id) ;
        if (!$ads) abort(404) ;
        $view_name = null  ; $model = null  ;
        if ($ads->apartment()){
            $view_name = "dashboard.ads.apartments.edit" ;
            $model = $ads->apartment() ;
        } else {
            if ($ads->car()) {
                $view_name = "dashboard.ads.cars.edit" ;
                $model = $ads->car() ;

            }elseif ($ads->other()){
                $view_name = "dashboard.ads.others.edit" ;
                $model = $ads->other() ;
            }
        }

        return view($view_name,[
            'model' => $model ,
            'title' => 'ads' ,
            'active' => 'ads'
        ]) ;
    }

    public function deleteImage($id){
        $img  = AdsPhoto::find($id) ;
        if (!$img) abort(404) ;
         $img->delete();

        Session::Flash('success',"Operation has successfully finished");
        return Redirect::back();
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
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',

        ];

        $this->validate($request, $rules);

        $ads =  Ads::find($id)->update([
            'title' => $request->get('title'),
            'subtitle' => $request->get('subtitle'),
            'description' => $request->get('description'),
            'price' => bcrypt($request->get('price')),
            'owner_phone' => bcrypt($request->get('owner_phone')),
            'adr' => bcrypt($request->get('adr')),
            'lat' => bcrypt($request->get('lat')),
            'log' => bcrypt($request->get('log')),
            'featured' => $request->get('featured') ? 1:0,
            'active' => $request->get('active') ? 1:0,
            'category_id' => bcrypt($request->get('category_id')),
            'customer_id' => Auth::user()->id ,

        ]);


        Session::Flash('success',"Operation has successfully finished");
        return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $ads = Ads::find($id) ;
       $ads->delete() ;

        return Redirect::back();
    }
}
