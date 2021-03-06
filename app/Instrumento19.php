<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento19 extends Model
{
    protected $table = "instrumento19";
    protected $fillable = ['user_id', 'retorno', 'ordem', 'done'];
    protected $casts = [
        'retorno' => 'array',
        'ordem' => 'array',
    ];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
