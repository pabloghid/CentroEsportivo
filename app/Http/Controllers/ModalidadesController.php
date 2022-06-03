<?php

namespace App\Http\Controllers;

use App\Models\Modalidade;
use Illuminate\Http\Request;
use App\Http\Requests\ModalidadeRequest;

class ModalidadesController extends Controller
{
    public function index(){
        $modalidades = Modalidade::all();
        return view('modalidades.index', ['modalidades'=>$modalidades]);
    }

    public function create(){
        return view('modalidades.create');
    }
    
    public function store(ModalidadeRequest $request){
        $nova_modalidade = $request->all();
        Modalidade::create($nova_modalidade);
        
        return redirect()->route('modalidades');
    }

    public function edit($id){
        $modalidade = Modalidade::find($id);
        return view('modalidades.edit', compact('modalidade'));
    }
    
    public function update(ModalidadeRequest $request, $id){
        Modalidade::find($id)->update($request->all());
        return redirect()->route('modalidades');
    }

    public function destroy($id) {
        Modalidade::find($id)->delete();
        return redirect()->route('modalidades');
    }
}
