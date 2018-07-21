<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Message extends Model
{
    protected $fillable=[
        'message',
        'read',
        'subject',
        'email',
        'sender' ,
        'user_id'
    ];

    public function belongsToUser(){
        return $this->user_id  == Auth::user()->id;
    }


}
