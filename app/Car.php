<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //

    protected  $fillable = ['adr' , 'zip' , 'car_model','model','is_owner','type_owner', 'description' , 'safety' , 'fuel_type' , 'mileage'
        ,'format_price' , 'price'  , 'ads_id' , 'year' , 'fiscal_power', 'color' , 'nbr_cylindre' , 'warranty'
    ] ;


    public function ads(){
        return  Ads::where('id' , $this->ads_id)->first() ;
    }
}
