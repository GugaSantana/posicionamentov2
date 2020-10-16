<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento6 extends Model
{
    protected $table = "instrumento6";
    protected $fillable = ['user_id', 'att', 'desvios', 'mediaVolume', 'mediaProdutividade', 'maiorDefasagem', 'menorDefasagem', 'done'];
    protected $casts = [
        'att' => 'array',
        'desvios' => 'array',
    ];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
