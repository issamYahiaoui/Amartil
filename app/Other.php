<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ads ;
class Other extends Model
{
    //
    protected  $fillable = ['adr' ,  'description' ,
         'price'  , 'ads_id' .'lat','lng'
    ] ;


    public function ads(){
        return  Ads::where('id' , $this->ads_id)->first() ;
    }
}
