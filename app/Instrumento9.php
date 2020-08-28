<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento9 extends Model
{
    protected $table = "instrumento9";
    protected $fillable = ['user_id', 'visual', 'auditivo', 'cinestesico', 'done'];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
