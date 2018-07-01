<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ads ;
class AdsPhoto extends Model
{
    //
    protected $fillable = ['ads_id' , 'filename'] ;


    public function  ads(){
        return Ads::where('id', $this->ads_id)->get() ;
    }
}
