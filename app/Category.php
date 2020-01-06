<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /**
 * Get the categories.
 */
  public function books_cat(){
      return $this->hasMany('App\Book');
  }
}
