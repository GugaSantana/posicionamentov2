<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento5 extends Model
{
    protected $table = "instrumento5";
    protected $fillable = ['user_id', 'retorno', 'intervalo', 'media', 'done'];
    protected $casts = [
        'retorno' => 'array',
        'intervalo' => 'array',
    ];
}
