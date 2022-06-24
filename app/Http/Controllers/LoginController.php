<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Pessoa;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        if(Auth::attempt($userDados)){
            return redirect()->route('login.sucesso');
        }
        return view('login.loginErro');
    }
    
    public function loginSucesso(){
        return redirect()->route('jogos');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
