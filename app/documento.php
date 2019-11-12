<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento extends Model
{
    protected $table = 'documento';
    protected $guarded = ['id'];

    public function ordenesdeservicios()
    {
     return $this->belongsTo('App\ordenesdeservicio','id_ordendeservicio');
   }
   
   public function usuarios()
   {
     return $this->belongsTo('App\User','id_users');
   }


     public function setCamionetaAttribute($value)
     {
         $this->attributes['camioneta']= ($value =='on') ? '1' :'0';
     }

     public function setSedanAttribute($value)
     {
          $this->attributes['sedan']= ($value =='on') ? '1' :'0';
     }

    public function setMotocicletaAttribute($value)
    {
        $this->attributes['motocicleta']= ($value =='on') ? '1' :'0';
    }

    public function setBlindadoAttribute($value)
    {
        $this->attributes['blindado']= ($value =='on') ? '1' :'0';
    }
    
    public function setConvencionalAttribute($value)
    {
        $this->attributes['convencional']= ($value =='on') ? '1' :'0';
    }
}
