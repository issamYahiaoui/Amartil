<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Tour;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone' , 'role' , 'facebook_url' , 'twitter_url' , 'youtube_url' , 'instagram_url'
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



}
