<?php

namespace App\Http\Controllers;

use App\Models\ArenaModalidade;
use App\Models\Arena;
use App\Models\Modalidade;
use Illuminate\Http\Request;
use App\Http\Requests\ArenaModalidadeRequest;

class ArenaModalidadesController extends Controller
{
    public function index(){
        $arenaModalidades = ArenaModalidade::all();
        return view('arenaModalidades.index', ['arenaModalidades'=>$arenaModalidades]);
    }

    public function create(){
        return view('arenaModalidades.create');
    }
    
    public function store(ArenaModalidadeRequest $request){
        $nova_arenaModalidade = $request->all();
        ArenaModalidade::create($nova_arenaModalidade);
        
        return redirect()->route('arenaModalidades');
    }

    public function edit($id){
        $arenaModalidade = ArenaModalidade::find($id);
        return view('arenaModalidades.edit', compact('arenaModalidade'));
    }
    
    public function update(ArenaModalidadeRequest $request, $id){
        ArenaModalidade::find($id)->update($request->all());
        return redirect()->route('arenaModalidades');
    }

    public function destroy($id) {
        ArenaModalidade::find($id)->delete();
        return redirect()->route('arenaModalidades');
    }
}
