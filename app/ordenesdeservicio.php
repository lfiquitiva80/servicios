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

public function usuarios()
{
  return $this->belongsTo('App\User','users_id');
}


public function escoltas(){
  return $this->belongsTo('App\escolta', 'Escolta_asignado');
}
public function vehiculos(){
 return $this->belongsTo('App\vehiculo', 'placa');
}

public function tipovehiculos(){
 return $this->belongsTo('App\tipodevehiculo', 'tipo');
}

public function estadoservicios(){
  return $this->belongsTo('App\estadoservicio', 'estadoservicio_id');
}

public function tiposdeservicios(){
  return $this->belongsTo('App\tiposervicio', 'tipo_de_servicio');
}


public function scopeSearch($query, $nombre)
{
 return $query ->where('No_de_orden_de_servicio','LIKE' ,  "%$nombre%");
}
public function scopeSearch1($query, $fecha_inicio_servicio)
{
 return $query ->where('fecha_inicio_servicio','LIKE' ,  "%$fecha_inicio_servicio%");
}

public  function documentos()
{
   return $this->HasMany('App\documento');
}
}
