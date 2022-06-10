@extends('layouts.master')
@section('title', 'Jogos')
@section('content')
<h1>Aqui listará os seus jogos</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Hora Inicio</th>
      <th scope="col">Hora Fim</th>
      <th scope="col">Arena</th>
      <th scope="col">Modalidade</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($jogos as $jogo)

    <tr>
      <th scope="row">{{$jogo->id}}</th>
      <td>{{\App\Models\Horario::find($jogo->horario_id)->hora_ini}} </td>
      <td>{{\App\Models\Horario::find($jogo->horario_id)->hora_fim}} </td>
      <td>{{\App\Models\Arena::find($jogo->arena_id)->nome}} </td>
      <td>{{\App\Models\Modalidade::find($jogo->modalidade_id)->nome}} </td>
      <td>                
          <a href="{{route('jogos.edit', ['id'=>$jogo->id]) }}" class="btn-sm  btn-success">Editar</a>
          <a href="{{route('jogos.destroy', ['id'=>$jogo->id]) }}" class="btn-sm  btn-danger">Excluir</a>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
      <a href="{{route('jogos.create', []) }}" class="btn-sm  btn-info">Adicionar</a>
@endsection