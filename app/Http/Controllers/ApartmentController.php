<?php

namespace App\Http\Controllers;

use App\Ads;
use App\AdsPhoto;
use App\Apartment;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;
class ApartmentController extends BaseController
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


//        return view('dashboard.apartments.list',[
//            'list'=> Category::all(),
//            'active'=>'ads',
//            'title'=> "Ads",
//        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.ads.apartments.add',[
            'active'=>'apartments',
            'title'=> "Add Apartment ads",

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



//        dd($request->all()) ;



        $rules = [
            'title' => 'required'
        ];


        $this->validate($request, $rules);
        $ads = Ads::create([
            'title' => $request->get('title'),
            'owner_phone' => $request->get('owner_phone'),
            'category_id' => $request->get('category_id'),
            'featured' => $request->get('featured'),
            'video_url' => $request->get('video_url'),
            'customer_id' => Auth::user()->id,

        ]) ;
        $files =$request->file('files') ;
       // dd($files);
        if (count($files)){

            for ($i=0 ; $i< count($files); $i++) {
                $img = $files[$i]->getClientOriginalName() ;
            //dd($img);
                Image::make($files[$i]->getRealPath())->save(public_path('images/' . $img));
                AdsPhoto::create([
                    'ads_id' => $ads->id,
                    'filename' => $img
                ]) ;
            }
        }

        $hide = ($request->get('property_type') === "Apartment" || $request->get('property_type') === "Houses and villas") ;
        $looking = ($request->get('intention') === "Looking for property") ;
        $other = ($request->get('is_owner') === "other") ;
        $apartment =  Apartment::create([
            'ads_id' =>$ads->id,
            'adr' => $looking ?  null : $request->get('adr'),
            'lat' => $looking ?  null : $request->get('lat'),
            'lng' => $looking ?  null : $request->get('lng'),
            'zip' => $looking?  null : $request->get('zip'),
            'is_owner' => $looking?  null : $request->get('is_owner'),
            'type_owner' => $looking?  null :$other ?  $request->get('type_owner') : null,
            'property_type' => $looking?  null : $request->get('property_type'),
            'rooms' => $looking?    null : (!$hide? null : $request->get('rooms')),
            'bathrooms' =>  $looking?  null : !$hide? null : $request->get('bathrooms'),
            'bedrooms' => $looking?  null : !$hide? null : $request->get('bedrooms'),
            'flour' => $looking?  null : !$hide? null : $request->get('flour'),
            'total_area' => $looking?  null : $request->get('total_area'),
            'description' => $request->get('description'),
            'additional_details' => $looking?  null : $request->get('additional_details'),
            'year_built' => $looking?  null : $request->get('year_built'),
            'format_price' => $looking?  null : $request->get('format_price'),
            'price' =>  $looking?  null :$request->get('price'),
            'price_meter' => $looking?  null : $request->get('price_meter') ,
            'intention' => $request->get('intention'),
        ]);
//        dd($apartment , $ads) ;
        $apartment->additional_details = $looking? null : $request->get('additional_details');
        $apartment->save();


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
            'title' => 'required'
        ];


        $this->validate($request, $rules);
        $ads = Ads::find($request->get('ads_id')) ;
        $ads->update([
            'title' => $request->get('title'),
            'owner_phone' => $request->get('owner_phone'),
            'category_id' => $request->get('category_id'),
            'featured' => $request->get('featured'),
            'video_url' => $request->get('video_url'),

        ]) ;
        $looking = ($request->get('intention') === "Looking for property") ;

        if (!$looking) {
            $files =$request->file('files') ;
            if (count($files)){

                for ($i=0 ; $i< count($files); $i++) {
                    $img = $files[$i]->getClientOriginalName() ;
                    //dd($img);
                    Image::make($files[$i]->getRealPath())->save(public_path('images/' . $img));
                    AdsPhoto::create([
                        'ads_id' => $ads->id,
                        'filename' => $img
                    ]) ;
                }
            }
        }else{
            $photos = AdsPhoto::where('ads_id',$ads->id) ;
                if ($photos) $photos->delete();
        }
        // dd($files);


        $hide = ($request->get('property_type') === "Apartment" || $request->get('property_type') === "Houses and villas") ;
        $other = ($request->get('is_owner') === "other") ;
        $apartment =  Apartment::find($id) ;
            $apartment->update([
            'ads_id' =>$ads->id,
            'additional_details' => $request->get('additional_details'),
            'adr' => $looking ?  null : $request->get('adr'),
            'lat' => $looking ?  null : $request->get('lat'),
            'lng' => $looking ?  null : $request->get('lng'),

            'zip' => $looking?  null : $request->get('zip'),
            'is_owner' => $looking?  null : $request->get('is_owner'),
            'type_owner' => $looking?  null :$other ?  $request->get('type_owner') : null,
            'property_type' => $looking?  null : $request->get('property_type'),
            'rooms' => $looking?    null : (!$hide? null : $request->get('rooms')),
            'bathrooms' =>  $looking?  null : !$hide? null : $request->get('bathrooms'),
            'bedrooms' => $looking?  null : !$hide? null : $request->get('bedrooms'),
            'flour' => $looking?  null : !$hide? null : $request->get('flour'),
            'total_area' => $looking?  null : $request->get('total_area'),
            'description' => $request->get('description'),
            'year_built' => $looking?  null : $request->get('year_built'),
            'format_price' => $looking?  null : $request->get('format_price'),
            'price' =>  $looking?  null :$request->get('price'),
            'price_meter' => $looking?  null : $request->get('price_meter') ,
            'intention' => $request->get('intention'),
        ]);
//        dd($request->get('additional_details')) ;
        $apartment->additional_details = $looking? null : $request->get('additional_details');
        $apartment->save();
//         dd($apartment->additional_details) ;

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

        Apartment::find($id)->delete() ;
        return Redirect::back();
    }
}
