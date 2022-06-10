@extends('layouts.master')
@section('title', 'Modalidades da arena')
@section('content')
<h1>Aqui listará as modalidades da arena</h1>

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
          class="btn-sm  btn-success">Editar</a>
        <a href="{{route('arenaModalidades.destroy', ['id'=>$arenaModalidade->id]) }}"
          class="btn-sm  btn-danger">Excluir</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('arenaModalidades.create', []) }}" class="btn-sm  btn-info">Adicionar</a>
</div>
@endsection