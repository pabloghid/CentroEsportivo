<?php

namespace App\Http\Controllers;

use App\Models\Arena;
use Illuminate\Http\Request;
use App\Http\Requests\ArenaRequest;

class ArenasController extends Controller
{
    public function index(){
        $arenas = Arena::all();
        return view('arenas.index', ['arenas'=>$arenas]);
    }

    public function create(){
        return view('arenas.create');
    }
    
    public function store(ArenaRequest $request){
        $nova_modalidade = $request->all();
        Arena::create($nova_modalidade);
        
        return redirect()->route('arenas');
    }

    public function edit($id){
        $arenas = Arena::find($id);
        return view('arenas.edit', compact('arenas'));
    }
    
    public function update(ArenaRequest $request, $id){
        Arena::find($id)->update($request->all());
        return redirect()->route('arenas');
    }

    public function destroy($id) {
        Arena::find($id)->delete();
        return redirect()->route('arenas');
    }
}
