<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento7 extends Model
{
    protected $table = "instrumento7";
    protected $fillable = ['user_id', 'pai', 'adulto', 'crianca', 'done'];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
