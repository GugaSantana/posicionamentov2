<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento16 extends Model
{
    protected $table = "instrumento16";
    protected $fillable = ['user_id', 'frequencia', 'done'];
    protected $casts = [
        'frequencia' => 'array',
    ];
}
