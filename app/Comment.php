<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = ['user_id' , 'body' , 'status'];
    public function product()
  {
    return $this->belongsTo('App\Product' , 'id');
  }

  public function user()
  {
    return $this->belongsTo('App\User' , 'user_id');
  }
}
