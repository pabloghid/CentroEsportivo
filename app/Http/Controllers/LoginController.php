<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Pessoa;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    
    public function verificar(LoginRequest $request){
        $userDados = array(
            'email'     => $request->get('email'),
            'password'  => $request->get('password')
        );
        print_r($userDados);
        if(Auth::attempt($userDados)){
            print_r('teste');
            return redirect()->route('login.sucesso');
        }
        else{
            print_r('nao rolou');
            print_r(Auth::attempt($userDados));
        }
        //return view('login.teste', ['userDados'=>$userDados]);
    }
    public function loginSucesso(){
        return redirect()->route('jogos');
    }
}
