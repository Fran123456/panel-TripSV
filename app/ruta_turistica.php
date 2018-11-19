<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruta_turistica extends Model
{
  protected $table = 'ruta_turisticas';
    protected $fillable = [
		'longitud', 	'latitud', 	'img_destino', 	'titulo', 	'descripcion'];
    protected $guarded = ['id'];
}

