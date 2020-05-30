<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoGestao extends Model
{
    protected $table = "auto_gestao";
    protected $fillable = ['user_id', 'instrumento', 'a', 'b', 'c', 'd', 'e', 'oque', 'como', 'quando'];
}
