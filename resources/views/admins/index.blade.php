@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
  <div class="col col-xl-10">
    <div class="card" style="border-radius: 1rem">
      <div class="card-body p-4">
        <div class="row g-0">

          <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
            Administradores </h2>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Id da pessoa</th>
                <th scope="col">Nome</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($admins as $admin)

              <tr>
                <th scope="row">{{$admin->id}}</th>
                <td>{{$admin->pessoa_id}} </td>
                <td>{{\App\Models\Pessoa::find($admin->pessoa_id)->nome}} </td>
                <td>
                  <a href="{{route('administradores.destroy', ['id'=>$admin->id]) }}"
                    class="btn-sm  btn-danger">Excluir</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <a href="{{route('administradores.create', []) }}" class="btn  btn-info">Adicionar</a>
      </div>
    </div>
  </div>
</div>
@endsection