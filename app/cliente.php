<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
  protected $table = 'cliente';
  protected $guarded = ['id'];

  public function scopeSearch($query, $nombre)
  {
  return $query ->where('nombre','LIKE' ,  "%$nombre%");
  }
  
   public function costos(){
     return $this->belongsTo('App\c_costo');

   }

}
