@extends('layouts.master')
@section('title', 'Jogos')
@section('content')
<div class="row bg-light rounded p-3">


    <div class="col">
        <h3 class="my-3">Seu jogo do dia {{date('d/m/Y', (strtotime($detalhesJogo->data)))}}</h3>
        <ul>
            <li>Horário: {{\App\Models\Horario::find($detalhesJogo->horario_id)->hora_ini}} -
                {{\App\Models\Horario::find($detalhesJogo->horario_id)->hora_fim}}</li>
            <li>Valor: R$ {{\App\Models\Arena::find($detalhesJogo->arena_id)->valor}}</li>
            <li>Arena: {{\App\Models\Arena::find($detalhesJogo->arena_id)->nome}} </li>
            <li>Modalidade: {{\App\Models\Modalidade::find($detalhesJogo->modalidade_id)->nome}} </li>
        </ul>
        <a target="_blank" href="{{route('previsao', ['data'=>$detalhesJogo->data]) }}" class="btn  btn-info">Previsão
            do dia</a>
        <button class="btn btn-danger" data-toggle="modal" data-target="#delete">Cancelar Jogo</button>
    </div>
</div>
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="myModalLabel">Confirmar exclusão</h4>
            </div>
            <form action="{{route('jogos.destroy', ['id'=>$detalhesJogo->id]) }}" method="get">
                <div class="modal-body">
                    <p class="text-center">
                        Tem certeza que deseja cancelar o jogo?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Não, fechar</button>
                    <button type="submit" class="btn btn-warning">Sim, cancelar o jogo</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection