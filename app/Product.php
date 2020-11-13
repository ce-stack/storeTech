<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    public function comments()
    {
      return $this->hasMany('App\Comment' , 'product_id');
    }
}
