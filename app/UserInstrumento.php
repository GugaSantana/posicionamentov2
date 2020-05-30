<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInstrumento extends Model
{
    protected $table = "user_instrumentos";
    protected $fillable = ['user_id', 'instrumento'];
}
