<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rentadora extends Model
{
  protected $table = 'rentadoras';
  protected $guarded = ['id'];

  public function scopeSearch($query, $nombre)
  {
  return $query ->where('nombre','LIKE' ,  "%$nombre%");
  }
}
