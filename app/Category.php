<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function books_cat(){
      return $this->hasMany('App\Book');
  }
}
