@extends('layouts.master')
@section('title', 'Marcar Jogo')
@section('content')
<div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
                <div class="col p-3 d-none d-md-block">

                    <h2 style="font-family: Constantia; font-weight: bold; padding: 5px;  text-align: center;"> Marcar
                        um jogo </h2>

                    {!! Form::open(['route'=>'jogos.store']) !!}

                    <div class="form-group p-2">
                        <h5 class="fw-normal" style="letter-spacing: 1px;">Selecione uma Modalidade</h5>
                        {!! Form::select('modalidade_id', $modalidadesDisponiveis, null, ['class'=>'form-select',
                        'placeholder'=>'Selecione uma modalidade',
                        'required', 'onchange'=>'getArenas()', 'id'=>'modalidade_id']) !!}
                    </div>

                    <div class="form-group p-2">
                        <h5 class="fw-normal " style="letter-spacing: 1px;">Selecione uma Arena</h5>
                        {!! Form::select('arena_id', $arenasDisponiveis, null, ['class'=>'form-select',
                        'placeholder'=>'Selecione uma arena',
                        'required', 'onchange'=>'getHorarios()', 'id'=>'arena_id'])
                        !!}
                    </div>

                    <div class="form-group p-2">
                        <h5 class="fw-normal " style="letter-spacing: 1px;">Selecione uma Data</h5>
                        <input class="form-control" onchange="getHorarios()" name="data" type="date"
                            min={{date('Y-m-d')}} id=data required>
                    </div>

                    <div class="form-group p-2">
                        <h5 class="fw-normal" style="letter-spacing: 1px;">Selecione um Horário</h5>
                        <select name="horario_id" id="horario_id" class="form-select" disabled required>
                            <option>Carregar Horários</option>
                        </select>
                    </div>
                    <div class="form-group mt-2 p-2">
                        <button class="btn btn-warning" type="submit">
                            <span class="bi bi-card-checklist p-2"> Marcar Jogo</span>
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="col-md-6 col-lg-5 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">

                        <img src="https://i.pinimg.com/564x/c6/a4/5b/c6a45bb98b0a6c3836c903f5587d349a.jpg"
                            alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />

                        <div class="card"
                            style="display: block; background-color: deepskyblue; position: relative; margin: 10px; text-align: center;">
                            <div class="card-body">
                                <a id="tempo" onclick="getPrevisao()" style="background-color: deepskyblue" target="_blank" href="{{route('previsao', []) }}" 
                                fill="currentColor" class="bi bi-cloud-hail border-0">
                                    Previsao do Tempo no Dia
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    function getHorarios() {
        dados = new FormData();
        formData = {
            modalidade: $("#modalidade_id").val(),
            arena: $("#arena_id").val(),
            data: $("#data").val(),
        };
        console.log(formData.arena);
        console.log(formData.data);
        console.log(formData.modalidade);

        if( $("#modalidade_id").val() != "" &  $("#arena_id").val() != "" &  $("#data").val() != ""){
            document.getElementById('horario_id').disabled = false;
        }
        $.ajax({
            type:'POST',
            url:'/getHorarios',
            data: formData,
            
            success:function(data) {
                var $horarios = $('#horario_id').val();
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
    function getArenas() {
        formData = {
            modalidade: $("#modalidade_id").val(),
        };
        $.ajax({
            type:'POST',
            url:'/getArenas',
            data: formData,
            
            success:function(data) {
                var $arenas = $('#arena_id').val();
                console.log(Object.keys(data).length);
                if (Object.keys(data).length > 0){
                    var option = '<option>Selecione uma arena</option>';
                    $.each(data, function(i, obj){
                        $.each(obj, function(j, valores){
                            console.log(valores);
                            option += '<option value="'+valores.id+'">'+valores.nome+'</option>';
                        })
                    })
                }
                $('#arena_id').html(option).show();
                console.log($arenas);
            }
        });
    }
    function getPrevisao() {
        dia = $("#data").val(),

        link = "{{route('previsao', []) }}";
        document.getElementById("tempo").href=link+dia; 
    }
</script>
@endsection