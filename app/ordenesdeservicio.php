<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordenesdeservicio extends Model
{
     protected $table = 'ordenesdeservicio';
    protected $guarded = ['id'];


	public function clientes()
	{	
		return $this->belongsTo('App\cliente','cliente');
	}


    public function escoltas(){
          return $this->belongsTo('App\escolta', 'Escolta_asignado');
       }

    public function estadoservicios(){
          return $this->belongsTo('App\estadoservicio', 'estadoservicio_id');
       }   
       
public function scopeSearch($query, $nombre)
    {
     return $query ->where('No_de_orden_de_servicio','LIKE' ,  "%$nombre%");
    }


}
