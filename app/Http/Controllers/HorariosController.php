<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use App\Http\Requests\HorarioRequest;

class HorariosController extends Controller
{
    public function index(){
        $horarios = Horario::all();
        return view('horarios.index', ['horarios'=>$horarios]);
    }

    public function create(){
        return view('horarios.create');
    }
    
    public function store(HorarioRequest $request){
        $novo_horario = $request->all();
        Horario::create($novo_horario);
        
        return redirect()->route('horarios');
    }

    public function edit($id){
        $horarios = Horario::find($id);
        return view('horarios.edit', compact('horarios'));
    }
    
    public function update(HorarioRequest $request, $id){
        Horario::find($id)->update($request->all());
        return redirect()->route('horarios');
    }

    public function destroy($id) {
        Horario::find($id)->delete();
        return redirect()->route('horarios');
    }
}
