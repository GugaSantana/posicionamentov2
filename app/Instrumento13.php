<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento13 extends Model
{
    protected $table = "instrumento13";
    protected $fillable = ['user_id', 'retorno', 'done'];
    protected $casts = [
        'retorno' => 'array',
    ];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
