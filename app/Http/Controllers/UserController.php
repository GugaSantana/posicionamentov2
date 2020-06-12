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
        return back()->with('message', 'Usuario ativado com sucesso');
    } 

    public function disableUser(Request $request){
        $user = User::find($request['user_id']);
        $user->enable = 0;
        $user->save();
        return back()->with('message', 'Usuario desativado com sucesso');
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
        return back()->with('message', 'Nível de acesso de usuario atualizado com sucesso!');
    }
}