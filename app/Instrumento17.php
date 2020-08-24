<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento17 extends Model
{
    protected $table = "instrumento17";
    protected $fillable = ['user_id', 'respostas', 'hard', 'soft', 'done'];
    protected $casts = [
        'respostas' => 'array'
    ];
}
