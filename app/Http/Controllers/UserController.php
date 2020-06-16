<?php

namespace App\Http\Controllers;

use App\Roles;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function enableUser(Request $request){
        $user = User::find($request['user_id']);
        $user->enable = 1;
        $user->save();
        return back()->with('success', 'Usuário ativado com sucesso!');
    } 

    public function disableUser(Request $request){
        $user = User::find($request['user_id']);
        $user->enable = 0;
        $user->save();
        return back()->with('success', 'Usuário desativado com sucesso!');
    }

    public function listUser(){
        $users = User::paginate(30);
        $roles = Roles::get();
        return view('list_users')->with(compact('users', 'roles'));
    }

    public function changeRole(Request $request){
        $user = User::find($request['user_id']);
        $user->role_id = $request['role_id'];
        $user->save();
        return back()->with('success', 'Nível de acesso de usuário atualizado com sucesso!');
    }

    public function clearInstrumentos(Request $request){
        $user = User::find($request['user_id']);

        foreach($user->instrumentos as $instrumento){
            $inst = "instrumento{$instrumento->instrumento}";
            if(isset($user->$inst)){
                $user->$inst->delete();
            }

            $instrumento->delete();
        }

        foreach($user->autoGestao as $autoGestao){
            $autoGestao->delete();
        }

        return back()->with('success', 'Os Instrumentos do usuário foram resetados com sucesso!');
    }
}