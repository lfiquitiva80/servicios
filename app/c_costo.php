<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class c_costo extends Model
{
    protected $table = 'centro_de_costos';
    protected $guarded = ['id'];


     public function clientes(){
     return $this->hasMany('App\cliente'); 
     
    }

    public function provisiones (){
        return $this->hasMany('App\provision', 'id_centro_de_costos', 'id');
    
      }
}
