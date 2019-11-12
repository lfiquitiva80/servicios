<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lnegocio extends Model
{
    protected $table = 'linea_de_negocio';
    protected $guarded = ['id'];
    
    public function provisiones (){
        return $this->hasMany('App\provision', 'id_linea_de_negocio', 'id');
    
      }
}
