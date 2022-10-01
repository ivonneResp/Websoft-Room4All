<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    

    public function posts(){
        return $this->hasMany('App\Models\Models\Post');
    }
}
