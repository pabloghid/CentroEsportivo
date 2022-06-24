@extends('layouts.master')
@section('title', 'Tempo')
@section('content')

<div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-9 col-lg-7 col-xl-5">

        <div class="card mb-4 gradient-custom" style="border-radius: 25px;">
            <div class="card-body p-4">

                <div class="d-flex justify-content-between mb-4 pb-2">
                    <div>
                        <h2 class="display-2"><strong>{{$tempMedia}}°C</strong></h2>
                        <p class="text-muted mb-0">Erechim, RS</p>
                        <p class="text-muted mb-0">{{\Carbon\Carbon::createFromTimestamp($dados[$media]['dt'])->format('d/m/Y')}}</p>
                    </div>
                    <div>
                        <img src="http://openweathermap.org/img/wn/{{ $dados[$media]['weather'][0]['icon'] }}@2x.png"
                            width="150px">
                    </div>
                </div>

            </div>
        </div>

        <div class="card p-4" style="border-radius: 25px;">
            <div class="card-body ">
                <div class="d-flex justify-content-around text-center">
                    @foreach ($dados as $tempo)


                    <div class="flex-column">
                        <p class="small"><strong>{{round($tempo['main']['temp'])}}°C</strong></p>
                        <img src="http://openweathermap.org/img/wn/{{ $tempo['weather'][0]['icon'] }}@2x.png"
                            width="50px">
                        <p class="mb-0">
                            <strong>{{\Carbon\Carbon::createfromTimeStamp($tempo['dt'])->format('H:i')}}</strong>
                        </p>                        
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection