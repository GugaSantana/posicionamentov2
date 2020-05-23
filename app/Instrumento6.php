<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento6 extends Model
{
    protected $table = "instrumento6";
    protected $fillable = ['user_id', 'att', 'desvios', 'mediaVolume', 'mediaProdutividade', 'done'];
    protected $casts = [
        'att' => 'array',
        'desvios' => 'array',
    ];
}
