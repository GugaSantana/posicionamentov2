<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento1 extends Model
{
    protected $table = "instrumento1";
    protected $fillable = ['user_id', 'visao', 'acao', 'quadrante', 'done'];
}
