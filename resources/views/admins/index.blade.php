@extends('layouts.master')
@section('title', 'Jogos')
@section('content')
<h1>Aqui listará os seus jogos</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Id da pessoa</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($admins as $admin)

    <tr>
      <th scope="row">{{$admin->id}}</th>
      <td>{{$admin->pessoa_id}} </td>
      <td>                
          <a href="{{route('administradores.edit', ['id'=>$admin->id]) }}" class="btn-sm  btn-success">Editar</a>
          <a href="{{route('administradores.destroy', ['id'=>$admin->id]) }}" class="btn-sm  btn-danger">Excluir</a>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
      <a href="{{route('administradores.create', []) }}" class="btn-sm  btn-info">Adicionar</a>
@endsection