<?php

namespace App\Http\Controllers;

use App\Company;
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

    public function acompanhamento(Request $request){
        $companies = Company::get();
        $company = null;
        if(isset($request['company_id'])){
            $companyId = $request['company_id'];
            $users = User::with('instrumentos','role');
            if($companyId != 0){
                $users = $users->where('company_id', $companyId);
                $company = Company::where('id',$companyId)->first();
            }
            $users = $users->paginate(30);
            $users->appends(['company_id' => $request['company_id'] ])->render();
        }
        else{
            $users = User::with('instrumentos','role')->paginate(30);
        }

        return view('list_acompanhamento')->with(compact('users','companies','company'));
    }

    public function reportUsers(Request $request){
        $companies = Company::get();
        $company = null;
        if(isset($request['company_id'])){
            $companyId = $request['company_id'];
            $users = User::with('role');
            if($companyId != 0){
                $users = $users->where('company_id', $companyId);
                $company = Company::where('id',$companyId)->first();
            }
            $users = $users->paginate(30);
            $users->appends(['company_id' => $request['company_id'] ])->render();
        }
        else{
            $users = User::with('role')->paginate(30);
        }

        return view('report_users')->with(compact('users','companies','company'));
    }
}