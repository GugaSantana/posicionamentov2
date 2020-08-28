<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento10 extends Model
{
    protected $table = "instrumento10";
    protected $fillable = ['user_id', 'total', 'done'];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
