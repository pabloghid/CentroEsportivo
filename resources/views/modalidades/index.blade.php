@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
  <div class="col col-xl-10">
    <div class="card" style="border-radius: 1rem">
      <div class="card-body p-4">
        <div class="row g-0">

          <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
            Modalidades Cadastradas </h2>
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
                  <a href="{{route('modalidades.edit', ['id'=>$modalidade->id]) }}"
                    class="btn-sm  btn-success">Editar</a>
                  <a href="{{route('modalidades.destroy', ['id'=>$modalidade->id]) }}"
                    class="btn-sm  btn-danger">Excluir</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <a href="{{route('modalidades.create', []) }}" class="btn btn-info">Adicionar</a>
      </div>
    </div>
  </div>
</div>
          @endsection