<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //


    protected $fillable = [
        'website_name',
        'website_adr',
        'website_phone',
        'website_description',
        'website_facebook',
        'website_twitter',
        'website_youtube',
        'website_instagram',

    ] ;


    public function images(){
        return SettingsPhoto::all() ;
    }
}
