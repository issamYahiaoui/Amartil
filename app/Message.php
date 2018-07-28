<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Message extends Model
{
    protected $fillable=[
        'message',
        'read_by_sender',
        'read_by_receiver',
        'subject',
        'from' ,
        'to' ,

    ];




}
