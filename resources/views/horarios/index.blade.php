@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
  <div class="col col-xl-10">
    <div class="card" style="border-radius: 1rem">
      <div class="card-body p-4">
        <div class="row g-0">

          <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
            Horarios Cadastrados </h2>

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
        </div>
        <a href="{{route('horarios.create', []) }}" class="btn  btn-info">Adicionar</a>
      </div>
    </div>
  </div>
</div>
@endsection