<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ot extends Model
{
    protected $table = 'ot';
    protected $guarded = ['id'];

    public function provisiones (){
        return $this->hasMany('App\provision', 'id_ot', 'id');
    
      }
}
