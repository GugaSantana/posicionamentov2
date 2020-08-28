<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento8 extends Model
{
    protected $table = "instrumento8";
    protected $fillable = ['user_id', 'exposicao', 'feedback', 'done'];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
