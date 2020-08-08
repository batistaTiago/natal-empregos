@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="heroivaga">
    <img class='imagemheroivaga' src="{{asset("img/heroivaga.jpg")}}">
</div>
<div class="container divdetalhes">
    <div class="infoenvio">
        <p>Enviado em {{ $vaga->created_at }}</p>
    </div>
    <div class="cabecalho">
        <p class="titulocabeca">
            {{ $vaga->titulo }}
        </p>
        <p>
            {{$vaga->sub_titulo}}
        </p>
        <p >
            {{ $vaga->empresa->cidade ?? 'Não informado' }}{{ $vaga->empresa->remoto ?? ' - Aceita remoto ' }}
        </p>
    </div>
    <div class="detalhado">
        <p>{{ $vaga->descricao }}</p>        
    </div>
    <div class="divsalario">
        <p>Remuneração: <strong>{{ isset($vaga->remuneracao) ? realMoney($vaga->remuneracao) : 'A combinar' }}</strong></p>
    </div>

    <h3>Requisitos</h3>
    <div class="divsessao">
       {{$vaga->requisitos}}
    </div>
    
    <h3>Benefícios</h3>
    <div class="divsessao">
        <ul>
            @foreach ($vaga->beneficios as $beneficio)
              <li>{{ $beneficio->nome }}</li>
            @endforeach
        </ul>
    </div>
    <hr />
    <br />

    <h3>Contato</h3>
    <div class="divsessao">
        {{ $vaga->contato }}
    </div>
</div>


@endsection

@section('js')
<script>

    $(() => {
        // escrever todo o código js aqui dentro

        

    });

</script>
@endsection