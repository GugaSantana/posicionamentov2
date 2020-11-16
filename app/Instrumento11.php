<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrumento11 extends Model
{
    protected $table = "instrumento11";
    protected $fillable = ['user_id', 'data', 'done', 'type'];
    protected $casts = [
        'data' => 'array',
        'data_diag' => 'array',
    ];

    public function user(){
        return $this->hasOne(\App\User::class, 'id','user_id');
    }
}
