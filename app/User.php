<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Ads ;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ads_limit','name', 'email', 'password','active', 'phone' , 'role' , 'facebook_url' , 'twitter_url' , 'youtube_url' , 'instagram_url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function  hasCustomerRole() {
        return  $this->role === "customer" ;
    }
    public function admin(){
        return User::where('role', 'superadmin')->first() ;
    }
    public function ads(){
        return Ads::where('customer_id', $this->id)->get() ;
    }
    static function adminPhone(){
       return User::where('role','superadmin')->first()->phone ;
    }
    static function adminName(){
       return User::where('role','superadmin')->first()->name ;
    }
    static function adminId(){
        return User::where('role','superadmin')->first()->id ;
    }
    static function adminEmail(){
        return User::where('role','superadmin')->first()->email ;
    }



}
