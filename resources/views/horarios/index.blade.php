@extends('layouts.master')
@section('title', 'horarios')
@section('content')
<h1>Aqui listará os horarios</h1>


        <table class="table">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Horario inicial</th>
              <th scope="col">Horario final</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($horarios as $horario)
            <tr>
              <th scope="row">{{$horario->id}}</th>
              <td>{{$horario->hora_ini}} </td>
              <td>{{$horario->hora_fim}} </td>
              <td>                
                  <a href="{{route('horarios.edit', ['id'=>$horario->id]) }}" class="btn-sm  btn-success">Editar</a>
                  <a href="{{route('horarios.destroy', ['id'=>$horario->id]) }}" class="btn-sm  btn-danger">Excluir</a>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
      <a href="{{route('horarios.create', []) }}" class="btn-sm  btn-info">Adicionar</a>
  </div>
@endsection