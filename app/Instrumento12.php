<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento12 extends Model
{
    protected $table = "instrumento12";
    protected $fillable = ['user_id', 'respostas', 'sim', 'nao', 'done'];
    protected $casts = [
        'respostas' => 'array',
    ];
}
