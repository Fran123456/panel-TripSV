<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paquete extends Model
{
    protected $table = 'paquetes';

    protected $fillable = [	'titulo', 	'body', 	'estado',	'cupo', 	'stock', 	'hora_partida', 	'hora_regreso', 	'guia_id', 	'rutaTuristica_id', 	'transporte_id' ,'user_id'];

   
}
