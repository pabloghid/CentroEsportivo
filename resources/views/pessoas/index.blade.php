@extends('layouts.masterAdmin')
@section('title', 'Admin')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
  <div class="col col-xl-10">
    <div class="card" style="border-radius: 1rem">
      <div class="card-body p-4">
        <div class="row g-0">

          <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;">
            Pessoas Cadastradas </h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Login</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pessoas as $pessoa)


              <tr>
                <th scope="row">{{$pessoa->id}}</th>
                <td>{{$pessoa->nome}} </td>
                <td>{{$pessoa->telefone}} </td>
                <td>{{$pessoa->email}} </td>
                <td>{{$pessoa->login}} </td>
                <td>
                  <a href="{{route('pessoas.edit', ['id'=>$pessoa->id]) }}"
                    class="btn-sm  btn-success">Editar</a>
                  <a href="{{route('pessoas.destroy', ['id'=>$pessoa->id]) }}"
                    class="btn-sm  btn-danger">Excluir</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection