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
        'name', 'gender', 'email', 'password', 'cpf', 'nascimento', 'schooling', 'course', 'fone', 'cellphone', 'cep', 'address', 'quarter', 'city', 'state', 'number', 'complement', 'empresa', 'branch', 'activity', 'office', 'role_id' ];

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

    public function instrumentos(){
        return $this->hasMany(\App\UserInstrumento::class, 'user_id');
    }

    public function instrumento1(){
        return $this->hasOne(\App\Instrumento1::class, 'user_id');
    }

    public function instrumento2(){
        return $this->hasOne(\App\Instrumento2::class, 'user_id');
    }

    public function instrumento3(){
        return $this->hasOne(\App\Instrumento3::class, 'user_id');
    }

    public function instrumento4(){
        return $this->hasOne(\App\Instrumento4::class, 'user_id');
    }

    public function instrumento5(){
        return $this->hasOne(\App\Instrumento5::class, 'user_id');
    }

    public function instrumento6(){
        return $this->hasOne(\App\Instrumento6::class, 'user_id');
    }

    public function instrumento7(){
        return $this->hasOne(\App\Instrumento7::class, 'user_id');
    }

    public function instrumento8(){
        return $this->hasOne(\App\Instrumento8::class, 'user_id');
    }

    public function instrumento9(){
        return $this->hasOne(\App\Instrumento9::class, 'user_id');
    }

    public function instrumento10(){
        return $this->hasOne(\App\Instrumento10::class, 'user_id');
    }

    public function instrumento11(){
        return $this->hasOne(\App\Instrumento11::class, 'user_id');
    }

    public function instrumento12(){
        return $this->hasOne(\App\Instrumento12::class, 'user_id');
    }

    public function instrumento13(){
        return $this->hasOne(\App\Instrumento13::class, 'user_id');
    }

    public function instrumento14(){
        return $this->hasOne(\App\Instrumento14::class, 'user_id');
    }

    public function instrumento15(){
        return $this->hasOne(\App\Instrumento15::class, 'user_id');
    }

    public function instrumento16(){
        return $this->hasOne(\App\Instrumento16::class, 'user_id');
    }

    public function instrumento17(){
        return $this->hasOne(\App\Instrumento17::class, 'user_id');
    }

    public function instrumento18(){
        return $this->hasOne(\App\Instrumento18::class, 'user_id');
    }

    public function instrumento19(){
        return $this->hasOne(\App\Instrumento19::class, 'user_id');
    }

    public function instrumento20(){
        return $this->hasOne(\App\Instrumento20::class, 'user_id');
    }
}
