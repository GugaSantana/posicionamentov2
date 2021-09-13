<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\UserCreated;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'sexo' => ['required', 'string', 'max:255'],
            'nascimento' => ['required', 'string', 'max:255'],
            'escolaridade' => ['required', 'string', 'max:255'],
            'curso' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cpf' => ['required', 'string', 'min:11', 'max:14'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'fone' => ['nullable', 'string', 'min:14'],
            'cellphone' => ['required', 'string', 'min:15'],
            'cep' => ['required', 'string', 'min:9', 'max:9'],
            'address' => ['required', 'string', 'max:255'],
            'quarter' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:5'],
            'complemento' => ['nullable', 'string', 'max:255'],
            'empresa' => ['required', 'string', 'max:255'],
            'ramo' => ['required', 'string', 'max:255'],
            'atividade' => ['required', 'string', 'max:255'],
            'cargo' => ['required', 'string', 'max:255'],
            'empresa' => ['nullable','string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'].' '.$data['lastname'],
            'gender' => $data['sexo'],
            'nascimento' =>$data['nascimento'],
            'schooling' => $data['escolaridade'],
            'course' => $data['curso'],
            'email' => $data['email'],           
            'cpf' =>$data['cpf'],
            'password' => Hash::make($data['password']),
            'fone' =>$data['fone'],
            'cellphone' =>$data['cellphone'],
            'cep' =>$data['cep'],
            'address' =>$data['address'],
            'quarter' =>$data['quarter'],
            'city' =>$data['city'],
            'state' =>$data['state'],
            'number' =>$data['number'],
            'complement' => $data['complemento'],
            'company_id' =>$data['empresa'],
            'branch' =>$data['ramo'],
            'activity' =>$data['atividade'],
            'office' =>$data['cargo'],
            'role_id' => null,
        ]);

        $user->notify(new UserCreated($user));

        return $user;
    }
}
