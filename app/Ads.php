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
        if ($this->apartment()) {
            return "<span><i style='padding-right: 5px '  class=\"fa fa-home\"></i>Appartements et maisons</span>" ;
        }elseif($this->car()){
            return "<span><i style='padding-right: 5px '  class=\"fa fa-car\"></i>Vehicules</span>" ;

        }elseif ($this->other()){
            return "<span><i  style='padding-right: 5px' class=\"fa fa-dashboard\"></i>Autres</span>" ;

        }

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
