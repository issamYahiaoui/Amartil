<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer ;
use App\Category ;
class Ads extends Model
{
    //
    protected $fillable = ['customer_id' , 'category_id' , 'title' , 'subtitle' , 'description' , 'price' , 'featured' ,
    'owner_phone', 'log' , 'lat', 'adr' , 'video_url' ,
    ] ;


    public function customer(){
        return Customer::find($this->customer_id) ;
    }

    public function category(){
        return Category::find($this->category) ;
    }
}
