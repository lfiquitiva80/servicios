<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ordenesdeservicio extends Model
{
     protected $table = 'ordenesdeservicio';
    protected $guarded = ['id'];


    public function estadoservicio()
    {
        return $this->hasMany('App\ordenesdeservicio', 'estadoservicio_id');
    }


}
