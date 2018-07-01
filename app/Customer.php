<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User ;
use App\Ads ;
class Customer extends Model
{
    //

    protected $fillable = ['user_id'] ;


    public function user(){
        return User::find($this->user_id) ;
    }

    public function ads(){
        return Ads::where('customer_id' , $this->id) ;
    }
}
