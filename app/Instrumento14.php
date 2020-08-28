<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento14 extends Model
{
    protected $table = "instrumento14";
    protected $fillable = ['user_id', 'resultado', 'clientes', 'cores', 'fatores', 'done'];
    protected $casts = [
        'resultado' => 'array',
        'clientes' => 'array',
        'cores' => 'array',
        'fatores' => 'array',
    ];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
