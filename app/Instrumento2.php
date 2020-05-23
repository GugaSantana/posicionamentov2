<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento2 extends Model
{
    protected $table = "instrumento2";
    protected $fillable = ['user_id', 'retorno', 'retornoOld', 'cores', 'done'];
    protected $casts = [
        'retorno' => 'array',
        'retornoOld' => 'array',
        'cores' => 'array'
    ];
}
