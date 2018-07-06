<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment ;
class Article extends Model
{

    protected  $fillable = ['content' , 'user_id' , 'tag' , 'title' , 'img_url'] ;



    public function comments(){
        return Comment::where('article_id', $this->id)->get() ;
    }
    public function user(){
        return User::find($this->user_id) ;
    }

}
