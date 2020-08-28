<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento2 extends Model
{
    protected $table = "instrumento2";
    protected $fillable = ['user_id', 'retorno', 'retornoOld', 'cores', 'desvio_maior', 'desvio_menor', 'done'];
    protected $casts = [
        'retorno' => 'array',
        'retornoOld' => 'array',
        'cores' => 'array'
    ];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
