<?php

namespace App\Http\Controllers;

use App\Company;
use App\Roles;
use App\User;
use Carbon\Carbon;
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

    public function listUser(Request $request){
        $users = User::orderby('id');

        // Filtro Data
        if(isset($request->periodo)){
            $date = explode(" - ", $request->periodo);
            $start = Carbon::createFromFormat('d/m/Y', $date[0])->format('Y-m-d');
            $finish = Carbon::createFromFormat('d/m/Y', $date[1])->format('Y-m-d');
            
            $users = $users->whereDate('created_at', '>=', $start)
                            ->whereDate('created_at', '<=', $finish);
        }

        // Filtro empresa
        if(!empty($request->empresa)){
            $users = $users->where('company_id', $request->empresa);
        }

        $users = $users->paginate(30);

        $roles = Roles::get();
        $companies = Company::orderby('name','asc')->get();
        return view('list_users')->with(compact('users', 'roles', 'companies', 'request'));
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

        for ($i=1; $i <= 20; $i++) { 
            $inst = "instrumento{$i}";
            if(isset($user->$inst)){
                dump($inst);
                $user->$inst->delete();
            }
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

    public function autogestao(Request $request){
        $companies = Company::get();
        $company = null;
        if(isset($request['company_id'])){
            $companyId = $request['company_id'];
            $users = User::with('instrumentos','role','autoGestao')->whereHas('autoGestao');
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

        return view('list_autogestao')->with(compact('users','companies','company'));
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