<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
      protected $fillable = [
        'nombre', 'apellido', 'dui','img_profile','disponibilidad',
    ];
    
    
}
