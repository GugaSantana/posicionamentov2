<?php

namespace App\Http\Controllers;

use App\Roles;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function listRole(){
        $roles = Roles::paginate(30);
        return view('list_roles')->with(compact('roles'));
    }

    public function createRoleView(){
        return view('create_role');
    }

    public function createRole(Request $request){
        $data = $request->all();
        Roles::create($data);
        return redirect()->route('role_list');
    }

    public function editRole(Request $request){
        $role = Roles::find($request['role_id']);
        return view('edit_role')->with(compact('role'));
    }

    public function updateRole(Request $request){
        $role = Roles::find($request['role_id']);
        $role->name = $request['name'];
        $role->instrumentos = $request['instrumentos'];
        $role->save();
        return redirect()->route('role_list');
    }

    public function removeRole(Request $request){
        $role = Roles::find($request['role_id']);
        $hasUser = User::where('role_id', $request['role_id'])->first();
        if(empty($hasUser)){
            $role->delete();
            return back()->with('message', 'Nível de acesso removido com sucesso!');
        }
        return back()->with('message', 'Não foi possível remover, pois possuem usuários atrelados a esse nível de permissão!');
    }
}
