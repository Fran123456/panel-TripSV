<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';
    protected $fillable = ['acompañantes','total','estado','stockpago','paquete_id','ubicacion_id','cliente_id'];
    protected $guarded = ['id'];
}
