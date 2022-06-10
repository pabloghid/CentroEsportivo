@extends('layouts.master')
@section('title', 'Marcar Jogo')
@section('content')
<h1>Aqui cria os jogos</h1>

{!! Form::open(['route'=>'jogos.store']) !!}

<div class="form-group">        
    {!! Form::label('arena_id', 'Escolha a arena:') !!}
    {!! Form::select('arena_id', $arenasDisponiveis, ['class'=>'form-control', 'required', 'onClick'=>'getHorarios()']) !!}
</div>
<div class="form-group">        
    {!! Form::label('modalidade_id', 'Escolha a modalidade:') !!}
    {!! Form::select('modalidade_id', $modalidadesDisponiveis, ['class'=>'form-control', 'required', 'onClick'=>'getHorarios()']) !!}
</div>

<div class="form-group">
    <label for="horario_id">Horários: </label>
    <select name="horario_id" id="horario_id">
        <option>Carregar Horários</option>
        {{-- @foreach ($horariosDisponiveis as $horario)
        <option value="{{$horario->id}}">{{$horario->hora_ini}} - {{$horario->hora_fim}}</option>
        @endforeach --}}
    </select>
</div>
<div class="form-group mt-2">
    {!! Form::submit('Criar Modalidade', ['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
</div>
{!! Form::close() !!}

 <?php
    echo Form::button('Replace Message',['onClick'=>'getHorarios()']);
 ?>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    function getHorarios() {
        $.ajax({
            type:'POST',
            url:'/getHorarios',
            
            success:function(data) {
                var $horarios = $('#horario_id').val();
                console.log($horarios);
                console.log(Object.keys(data).length);
                if (Object.keys(data).length > 0){
                    var option = '<option>Selecione o Horário</option>';
                    $.each(data, function(i, obj){
                        $.each(obj, function(j, valores){
                            console.log(valores);
                            option += '<option value="'+valores.id+'">'+valores.hora_ini+' - '+valores.hora_fim+'</option>';
                        })
                    })
                }
                $('#horario_id').html(option).show();
                console.log($horarios)
            }
        });
    }
    function getModalidades() {
        $.ajax({
            type:'POST',
            url:'/getModalidades',
            
            success:function(data) {
                var $modalidades = $('#modalidade_id').val();
                console.log($horarios);
                console.log(Object.keys(data).length);
                if (Object.keys(data).length > 0){
                    var option = '<option>Selecione a modalidade</option>';
                    console.log('entrei no if');
                    $.each(data, function(i, obj){
                        $.each(obj, function(j, valores){
                            console.log(valores);
                            option += '<option value="'+valores.id+'">'+valores.nome+'</option>';
                        })
                    })
                }
                $('#horario_id').html(option).show();
                console.log($horarios)
            }
        });
    }
</script>
@endsection