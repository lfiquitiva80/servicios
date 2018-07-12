<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class escolta extends Model
{
    protected $table = 'escolta';
    protected $guarded = ['id'];

    public  function ordenesdeservicios()
     {
        return $this->HasMany('App\ordenesdeservicio');
     }

     public function scopeSearch($query, $nombre)
    {
     return $query ->where('nombre','LIKE' ,  "%$nombre%");
    }
}
