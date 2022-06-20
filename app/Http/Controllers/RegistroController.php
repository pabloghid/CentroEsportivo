<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Pessoa;
use App\Models\Usuario;

class RegistroController extends Controller
{
    public function index()
    {
        return view('registro.registro');
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email|unique:pessoas',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect()->route('jogos');
    }
    
    public function store(Request $request)
    {
      Pessoa::create([
        'nome' => $request['nome'],
        'telefone' => $request['telefone'],
        'login' => $request['login'],
        'email' => $request['email'],
        'password' => Hash::make($request['password'])
      ]);
      $pessoaId = Pessoa::where('email', 'pablog@gmail.com')->value('id');
      Usuario::create(['pessoa_id' => $pessoaId]);
      return redirect()->route('jogos');
    }
}
