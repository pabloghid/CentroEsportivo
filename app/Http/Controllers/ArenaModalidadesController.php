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
        $arenaArray = [];
        $modalidadeArray = [];
        $count = 0;
        foreach($arenaModalidades as $arenaModalidade){
            $count = $count + 1;
            $arena = Arena::where('id', "$arenaModalidade[arena_id]")->get()->toArray();
            $modalidade = Modalidade::where('id', "$arenaModalidade[modalidade_id]")->get()->toArray();
            array_push($arenaArray, $arena);
            array_push($modalidadeArray, $modalidade);
        }
        print_r($arena);
        return view('arenaModalidades.index', ['arenaModalidades'=>$arenaModalidades, 'arena'=>$arenaArray, 'modalidade'=>$modalidadeArray]);
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
