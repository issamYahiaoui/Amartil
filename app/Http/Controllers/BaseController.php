<?php
namespace App\Http\Controllers;

use App\Ads;
use App\Message;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller {
    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        $locations = [] ;
        $i= 0 ;
        foreach (Ads::all() as $ad){
            if($ad->subclass()->adr){
                $locations[$i] = $ad->subclass()->adr ;
                $i++ ;
            }
        }
        \view()->share([
            'newMessages' => $newMessages ,
            'locations' => $locations
        ]);

    }
}