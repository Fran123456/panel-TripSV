<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
      protected $table = 'posts';
    protected $fillable = [	'titulo', 	'slug', 	'body', 	'categoria_id', 	'usuario_id'];
    protected $guarded = ['id'];
}
