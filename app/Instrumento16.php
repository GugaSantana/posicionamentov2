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

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
