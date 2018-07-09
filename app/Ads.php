<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer ;
use App\Category ;
use App\AdsPhoto;
use App\Apartment ;
use App\Car ;
use App\Other;
class Ads extends Model
{
    //
    protected $fillable = ['customer_id' , 'category_id' , 'title' ,'featured' ,
    'owner_phone',  'video_url' ,
    ] ;


    public function customer(){
        return Customer::find($this->customer_id) ;
    }

    public function category(){
        return Category::find($this->category_id) ;
    }
    public function apartment(){
        return Apartment::where('ads_id',$this->id)->first() ;
    }
    public function car(){
        return Car::where('ads_id',$this->id)->first() ;
    }
    public function other(){
        return Other::where('ads_id',$this->id)->first() ;
    }
    public function  images(){
        return AdsPhoto::where('ads_id', $this->id)->get() ;
    }
    public function subclass(){
        if ($this->apartment()) {
            return $this->apartment() ;
        }elseif($this->car()){
            return $this->car() ;
        }elseif ($this->other()){
            return $this->other();
        }
    }



}
