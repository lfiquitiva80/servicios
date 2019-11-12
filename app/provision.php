<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provision extends Model
{
    protected $table = 'provision';
    protected $guarded = ['id'];
    
    
    public function proveedores(){
        return $this->belongsTo('App\proveedor','id_proveedor','id'); 
    }

    public function c_costos(){
        return $this->belongsTo('App\c_costo','id_centro_de_costos','id'); 
    } 
    public function ots(){
        return $this->belongsTo('App\ot','id_ot','id'); 

    } 
    public function lnegocios(){
        return $this->belongsTo('App\lnegocio','id_linea_de_negocio','id'); 

    }  
}
