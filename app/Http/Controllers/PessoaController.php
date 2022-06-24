<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        $pessoas = Pessoa::all();
        return view('pessoas.index', ['pessoas'=>$pessoas]);
    }

    public function edit($id){
        $pessoa = Pessoa::find($id);
        return view('pessoas.edit', compact('pessoa'));
    }
    
    public function update(Request $request, $id){
        Pessoa::find($id)->update($request->all());
        return redirect()->route('pessoas');
    }

    public function destroy($id) {
        Pessoa::find($id)->delete();
        return redirect()->route('pessoas');
    }
}
