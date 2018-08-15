<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculo extends Model
{
  protected $table = 'vehiculo';
  protected $guarded = ['vehiculo'];

  public function scopeSearch($query, $placa)
  {
  return $query ->where('placa','LIKE' ,  "%$placa%");
  }
  public  function ordenesdeservicios()
   {
      return $this->HasMany('App\ordenesdeservicio');
   }

}
