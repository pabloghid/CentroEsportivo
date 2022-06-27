@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
  <div class="col col-xl-10">
    <div class="card" style="border-radius: 1rem">
      <div class="card-body p-4">
        <div class="row g-0">

          <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
            Modalidades da arena </h2>


          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome da arena</th>
                <th scope="col">Nome da modalidade</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($arenaModalidades as $arenaModalidade)
              <tr>
                <th scope="row">{{$arenaModalidade->id}}</th>
                <td>{{\App\Models\Arena::find($arenaModalidade->arena_id)->nome}} </td>
                <td>{{\App\Models\Modalidade::find($arenaModalidade->modalidade_id)->nome}} </td>
                <td>
                  <a href="{{route('arenaModalidades.edit', ['id'=>$arenaModalidade->id]) }}"
                    class="btn btn-sm  btn-success">Editar</a>
                    <a data-toggle="modal" data-target="#delete"
                    class="btn btn-sm  btn-danger">Excluir</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <a href="{{route('arenaModalidades.create', []) }}" class="btn  btn-info">Adicionar</a>
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
      <form action="{{route('arenaModalidades.destroy', ['id'=>$arenaModalidade->id]) }}" method="get">
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