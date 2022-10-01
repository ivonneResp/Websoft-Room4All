<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Laravelista\Comments\Commentable;

class Post extends Model
{
   // use Commentable;

   protected $fillable = ['user_id'];
  

    public function category(){
        return $this->belongsTo('App\Models\Models\Category');
    }

    //RELACIÓN UNO A MUCHOS INVERSA
    public function user(){
        return $this->belongsTo('App\User');
    }
}
