<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  public function libraries()
{
return $this->belongsToMany('App\Library');
}

public function category(){
    return $this->belongsTo('App\Category', 'category_id');
}
}
