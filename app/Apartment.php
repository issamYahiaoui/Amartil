<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    //

    protected  $fillable = ['intention','adr' , 'zip', 'is_owner' , 'type_owner' , 'property_type' , 'rooms' , 'bathrooms', 'salons' , 'bedrooms'

    , 'total_area' ,'description' ,'flour', ' additional_details' , 'year_built' ,'format_price' , 'price' , 'price_meter' , 'ads_id'

    ] ;


    public function ads(){
        return  Ads::where('id' , $this->ads_id)->first() ;
    }
}
