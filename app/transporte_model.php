<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transporte_model extends Model
{
    protected $table = 'transporte_models';
    protected $fillable = ['nombre','descripcion','capacidad'];
    protected $guarded = ['id'];
}
