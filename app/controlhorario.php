<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class controlhorario extends Model
{
     protected $table = 'controlhorario';
     protected $guarded = ['id'];

  public function scopeSearch($query, $nombre)
  {
    
  return $query ->where('escolta_id',$nombre);
  }

  public  function escoltas()
   {
      return $this->belongsTo('App\escolta','escolta_id');
   }


   public  function estadoscontrolhorarios()
   {
      return $this->belongsTo('App\estadocontrolhorario','estadocontrol');
   }
}
