<?php

namespace App\Http\Controllers;

use App\Settings;
use App\SettingsPhoto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;
use Intervention\Image\Facades\Image;

class SettingsController extends BaseController
{
    //

    public function index(){
        return view('dashboard.settings.index',[
            'title' => 'Settings' ,
                'settings' =>Settings::all()->first()
            ]
        ) ;
    }

    public function updateSettings(Request $request){
        $settings  =  Settings::all()->first() ;
        if (!$settings) abort(404) ;
        $files =$request->file('files') ;
        if (count($files)){

            for ($i=0 ; $i< count($files); $i++) {
                $img = $files[$i]->getClientOriginalName() ;
                //dd($img);
                Image::make($files[$i]->getRealPath())->save(public_path('images/slider/' . $img));
                SettingsPhoto::create([
                    'filename' => $img
                ]) ;
            }
        }
        $settings->update([
            'website_name' => $request->get('website_name'),
            'website_phone' => $request->get('website_phone'),
            'website_description' => $request->get('website_description'),
            'website_adr' => $request->get('website_adr'),
            'website_facebook' => $request->get('website_facebook'),
            'website_twitter' => $request->get('website_twitter'),
            'website_youtube' => $request->get('website_youtube'),
            'website_instagram' => $request->get('website_instagram'),
        ]) ;
        Session::Flash('success',"Operation has successfully finished");
        return Redirect::back();
    }

    public function deleteImage($id){
        $image  = SettingsPhoto::find($id) ;
        if (!$image) abort(404) ;
        $image->delete() ;
        Session::Flash('success',"Operation has successfully finished");
        return Redirect::back();
}
}
