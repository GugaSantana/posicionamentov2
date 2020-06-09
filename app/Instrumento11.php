<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento11 extends Model
{
    protected $table = "instrumento11";
    protected $fillable = ['user_id', 'data', 'done'];
    protected $casts = [
        'data' => 'array',
        'data_diag' => 'array',
    ];
}
