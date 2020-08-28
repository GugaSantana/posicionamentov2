<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento18 extends Model
{
    protected $table = "instrumento18";
    protected $fillable = ['user_id', 'a', 'b', 'c', 'd', 'done'];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
