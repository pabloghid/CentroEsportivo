<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    public function index(){
        $admins = Admin::all();
        return view('admins.index', ['admins'=>$admins]);
    }

    public function create(){
        $pessoas = Pessoa::pluck('nome', 'id');
        return view('admins.create', compact(['pessoas', 'pessoas']));
    }
    
    public function store(AdminRequest $request){
        $nova_arena = $request->all();
        Admin::create($nova_arena);
        
        return redirect()->route('administradores');
    }

    public function edit($id){
        $admins = Admin::find($id);
        return view('admins.edit', compact('administradores'));
    }
    
    public function update(AdminRequest $request, $id){
        Admin::find($id)->update($request->all());
        return redirect()->route('administradores');
    }

    public function destroy($id) {
        Admin::find($id)->delete();
        return redirect()->route('administradores');
    }
}
