<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $table = 'proveedores';
    protected $guarded = ['proveedores'];

    public function provisiones (){
        return $this->hasMany('App\provision', 'id_proveedor', 'id');
    
      }
}
 