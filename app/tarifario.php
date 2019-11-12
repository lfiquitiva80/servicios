<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarifario extends Model
{
    protected $table = 'tarifa_estandar';
    protected $guarded = ['id'];
}
