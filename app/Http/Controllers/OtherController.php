<?php

namespace App\Http\Controllers;

use App\Ads;
use App\AdsPhoto;

use App\Other;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;
use Intervention\Image\Facades\Image;

class OtherController extends Controller
{
    public function __construct()
    {
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

        return view('dashboard.ads.others.add',[
            'active'=>'others',
            'title'=> "Add Other ads",

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



        $other =  Other::create([
            'ads_id' =>$ads->id,
            'adr' => $request->get('adr'),
            'lat' => $request->get('lat'),
            'lng' => $request->get('lng'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
        ]);
//        dd($other) ;


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



        $other =  Other::find($id)->update([
            'ads_id' =>$ads->id,
            'adr' => $request->get('adr'),
            'lat' => $request->get('lat'),
            'lng' => $request->get('lng'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
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

        Other::find($id)->delete() ;
        return Redirect::back();
    }
}
