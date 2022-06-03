@extends('layouts.master')
@section('title', 'arenas')
@section('content')
<h1>Aqui listará as arenas</h1>


        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome da arena</th>
              <th scope="col">Valor</th>
              <th scope="col">Descrição</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($arenas as $arena)
            
              
            <tr>
              <th scope="row">{{$arena->id}}</th>
              <td>{{$arena->nome}} </td>
              <td>{{$arena->valor}} </td>
              <td>{{$arena->descricao}} </td>
              <td>                
                  <a href="{{route('arenas.edit', ['id'=>$arena->id]) }}" class="btn-sm  btn-success">Editar</a>
                  <a href="{{route('arenas.destroy', ['id'=>$arena->id]) }}" class="btn-sm  btn-danger">Excluir</a>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
      <a href="{{route('arenas.create', []) }}" class="btn-sm  btn-info">Adicionar</a>
  </div>
@endsection