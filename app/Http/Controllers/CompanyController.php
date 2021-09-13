<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function listCompany(){
        $companies = Company::paginate(30);
        return view('company.list')->with(compact('companies'));
    }

    public function createCompanyView(){
        return view('company.create');
    }

    public function createCompany(Request $request){
        $data = $request->all();
        Company::create($data);
        return redirect()->route('company_list');
    }

    public function enableCompany(Request $request){
        $company = Company::find($request['company_id']);
        $company->enable = 1;
        $company->save();
        return back()->with('success', 'Empresa ativada com sucesso!');
    } 

    public function disableCompany(Request $request){
        $company = Company::find($request['company_id']);
        $company->enable = 0;
        $company->save();
        return back()->with('success', 'Empresa desativada com sucesso!');
    }

    public function editCompany(Request $request){
        $company = Company::find($request['company_id']);
        return view('company.edit')->with(compact('company'));
    }

    public function updateCompany(Request $request){
        $company = Company::find($request['company_id']);
        $company->name = $request['name'];
        $company->welcome_mail = $request['welcome_mail'];
        $company->save();
        return redirect()->route('company_list');
    }

    // public function removeRole(Request $request){
    //     $role = Company::find($request['role_id']);
    //     $hasUser = User::where('role_id', $request['role_id'])->first();
    //     if(empty($hasUser)){
    //         $role->delete();
    //         return back()->with('message', 'Nível de acesso removido com sucesso!');
    //     }
    //     return back()->with('message', 'Não foi possível remover, pois possuem usuários atrelados a esse nível de permissão!');
    // }
}
