<?php

namespace App\Http\Controllers;

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
        return view('list_users')->with(compact('users'));
    }
}