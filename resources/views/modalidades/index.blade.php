@extends('layouts.master')
@section('title', 'Modalidades')
@section('content')
<h1>Aqui listará as modalidades</h1>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($modalidades as $modalidade)
            
              
            <tr>
              <th scope="row">{{$modalidade->id}}</th>
              <td>{{$modalidade->nome}} </td>
              <td>                
                  <a href="{{route('modalidades.edit', ['id'=>$modalidade->id]) }}" class="btn-sm  btn-success">Editar</a>
                  <a href="{{route('modalidades.destroy', ['id'=>$modalidade->id]) }}" class="btn-sm  btn-danger">Excluir</a>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
      <a href="{{route('modalidades.create', []) }}" class="btn-sm  btn-info">Adicionar</a>
@endsection