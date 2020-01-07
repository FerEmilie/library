<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
  protected $fillable = ['name'];

  /**
 * Get the books on the library.
 */
  public function books()
  {
  return $this->belongsToMany('App\Book')->withPivot('do');
  }

    /**
   * Get the user that owns the library.
   */
  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
