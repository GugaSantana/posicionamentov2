<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento3 extends Model
{
    protected $table = "instrumento3";
    protected $fillable = ['user_id', 'retorno', 'diferenca', 'done'];
    protected $casts = [
        'retorno' => 'array',
        'diferenca' => 'array',
    ];
}
