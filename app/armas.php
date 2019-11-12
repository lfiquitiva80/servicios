<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class armas extends Model
{
     protected $table = 'armas';
  protected $guarded = ['id'];

  public function scopeSearch($query, $nombre)
  {
  return $query ->where('nombre','LIKE' ,  "%$nombre%");
  }
}
