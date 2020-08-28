<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento15 extends Model
{
    protected $table = "instrumento15";
    protected $fillable = ['user_id', 'frequencia', 'argumentos', 'total', 'done'];
    protected $casts = [
        'frequencia' => 'array',
        'argumentos' => 'array',
    ];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
