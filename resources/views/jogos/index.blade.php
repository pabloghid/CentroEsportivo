@extends('layouts.master')
@section('title', 'Jogos')
@section('content')

<div class="row d-flex justify-content-center h-100">
  <div class="col col-xl-10">
    <div class="card" style="border-radius: 25px;">
      <div class="card-body p-4">
        <div class="row g-0">

          <div class="text-center">
            <h1>Bem Vindo {{\App\Models\Pessoa::find($usuarioId)->nome}}</h1>
          </div>



          <h5 class="fw-normal " style="letter-spacing: 1px;">Seus jogos marcados:</h5>
          @if (!empty($jogos['0']))
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Início do jogo</th>
                <th scope="col">Fim do jogo</th>
                <th scope="col">Data</th>
                <th scope="col">Arena</th>
                <th scope="col">Modalidade</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($jogos as $jogo)
              <tr>
                <td>{{\App\Models\Horario::find($jogo->horario_id)->hora_ini}} </td>
                <td>{{\App\Models\Horario::find($jogo->horario_id)->hora_fim}} </td>
                <td>{{date('d/m/Y', (strtotime($jogo->data)))}} </td>
                <td>{{\App\Models\Arena::find($jogo->arena_id)->nome}} </td>
                <td>{{\App\Models\Modalidade::find($jogo->modalidade_id)->nome}} </td>
                <td>
                  <a href="{{route('jogos.detalhes', ['id'=>$jogo->id]) }}" class="btn-sm  btn-info">Detalhes do Jogo</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else

          <div class="alert alert-warning" role="alert">
            <strong>Você não tem nenhum jogo marcado!</strong>
          </div>
          @endif
        </div>
        <a href="{{route('jogos.create', []) }}" class="btn btn-warning">Marcar novo jogo</a>
      </div>
    </div>
  </div>
</div>
@endsection