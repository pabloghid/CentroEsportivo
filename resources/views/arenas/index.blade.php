@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
  <div class="col col-xl-10">
    <div class="card" style="border-radius: 1rem">
      <div class="card-body p-4">
        <div class="row g-0">

          <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
            Arenas Cadastradas </h2>


          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome da arena</th>
                <th scope="col">Valor</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
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
                  <a href="{{route('arenas.edit', ['id'=>$arena->id]) }}" class="btn btn-sm  btn-success">Editar</a>
                  <a data-toggle="modal" data-target="#delete" class="btn btn-sm  btn-danger">Excluir</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
        <a href="{{route('arenas.create', []) }}" class="btn btn-info">Adicionar</a>
      </div>
    </div>
  </div>
</div>
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-center" id="myModalLabel">Confirmar exclusão</h4>
          </div>
          <form action="{{route('arenas.destroy', ['id'=>$arena->id]) }}" method="get">
              <div class="modal-body">
                  <p class="text-center">
                      Tem certeza que deseja excluir?
                  </p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" data-dismiss="modal">Não, cancelar</button>
                  <button type="submit" class="btn btn-warning">Sim, excluir</button>
              </div>
          </form>
      </div>
  </div>
</div>
@endsection