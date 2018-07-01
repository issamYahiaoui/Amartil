<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ads ;
class Category extends Model
{
    //
    protected $fillable = ['name'] ;




    public function ads(){
        return Ads::where('category_id' , $this->id) ;
    }
}
