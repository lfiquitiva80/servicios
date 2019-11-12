<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class controlhorario extends Model
{
     protected $table = 'controlhorario';
     protected $guarded = ['id'];

  public function scopeSearch($query, $nombre, $fechahorario, $fechahorariofinal)
  {
   return $query ->where('escolta_id',$nombre)
                ->whereBetween('Fecha_Registro', [$fechahorario, $fechahorariofinal]);
  }


  public  function escoltas()
   {
      return $this->belongsTo('App\escolta','escolta_id');
   }

   public  function escoltashorarios()
   {
      return $this->belongsTo('App\escolta','escolta_id');
   }

   public  function estadoscontrolhorarios()
   {
      return $this->belongsTo('App\estadocontrolhorario','estadocontrol');
   }

         public  function ordenes()
   {
      return $this->belongsTo('App\ordenesdeservicio','ordenesdeservicio_id');
   }

      public  function usuarios()
   {
      return $this->belongsTo('App\User','id_usuario');
   }
}
