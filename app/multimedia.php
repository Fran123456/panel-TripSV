<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class multimedia extends Model
{
     protected $table = 'multimedia';
    protected $fillable = ['id','url','tipox','post_id','paquete_id'];
   // protected $guarded = ['id'];
}
