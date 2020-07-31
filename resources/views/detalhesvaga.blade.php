@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
    <div class="container divdetalhes">
        <div class="infoenvio">
            <p>Enviado em 25/07/2020 às 21:06</p>
        </div>
        <div class="cabecalho">
            <p class="titulocabeca">
                Emprego para Auxiliar Técnico em Eletrônica
            </p>
            <p >
                Local de trabalho
            </p>
        </div>
        <div class="detalhado">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release 
                of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class="divsalario">
            <p>Remuneração: <strong>R$ 1500,0</strong></p>
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