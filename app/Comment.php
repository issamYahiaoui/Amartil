<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article ;
use App\User ;
class Comment extends Model
{


        protected  $fillable = ['content' , 'user_id' , 'article_id'] ;


        public function article(){
            return Article::find($this->article_id) ;
        }
    public function user(){
        return User::find($this->user_id) ;
    }
}
