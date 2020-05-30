<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'nascimento', 'fone', 'cep', 'address', 'quarter', 'city', 'state', 'number', 'formation', 'empresa', 'role_id' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->hasOne(\App\Roles::class, 'id','role_id');
    }

    public function getInstrumentos(){
        return \DB::table('user_instrumentos')->where('user_id', $this->id)->get();
    }

    public function autoGestao(){
        return $this->hasMany(\App\AutoGestao::class, 'user_id');
    }
}
