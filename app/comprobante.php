<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comprobante extends Model
{
    protected $table = 'comprobantes';
    protected $fillable = ['fecha','compra_id','paquete_id'];
    protected $guarded = ['id'];
}
