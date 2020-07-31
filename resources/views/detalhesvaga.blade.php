@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
    <div class="container divdetalhes">
        <div class="infoenvio">
            <p>Enviado em {{ $vaga->created_at }}</p>
        </div>
        <div class="cabecalho">
            <p class="titulocabeca">
                {{ $vaga->titulo }}
            </p>
            <p >
                Local de trabalho
            </p>
        </div>
        <div class="detalhado">
            <p>{{ $vaga->descricao }}</p>
        </div>
        <div class="divsalario">
            <p>Remuneração: <strong>{{ isset($vaga->remuneracao) ? realMoney($vaga->remuneracao) : 'A combinar' }}</strong></p>
        </div>

        <h3>Requesitos</h3>
        <div class="requisitos">
            <ul>
                <li>Habilitação A</li>
                <li>Ter curso básico em eletrônica</li>
                <li>Ensino médio completo</li>
                <li>Conhecimentos em informática</li>
            </ul>
        </div>
        
        <h3>Benefícios</h3>
        <div class="divbeneficios">
            <ul>
                <li>Vale transporte</li>
                <li>Plano de saúde</li>
                <li>Vale refeição</li>
            </ul>
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