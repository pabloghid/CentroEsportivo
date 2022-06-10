@extends('layouts.master')
@section('title', 'Horários')
@section('content')
<h1>Aqui listará os seus jogos</h1>
<tbody>
    @foreach ($jogos as $jogo)
      
    <tr>
      <th scope="row">{{print_r($jogo)$jogo->id}}</th>
      <td>{{$jogo->horario_id}} </td>
      <td>                
          <a href="{{route('modalidades.edit', ['id'=>$jogo->id]) }}" class="btn-sm  btn-success">Editar</a>
          <a href="{{route('modalidades.destroy', ['id'=>$jogo->id]) }}" class="btn-sm  btn-danger">Excluir</a>
      </td>
    </tr>
      @endforeach
@endsection