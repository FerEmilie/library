<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  /**
 * Get the library where is the book.
 */
    public function libraries()
  {
  return $this->belongsToMany('App\Library');
  }

  /**
 * Get the category of the book.
 */
  public function category(){
      return $this->belongsTo('App\Category');
  }
}
