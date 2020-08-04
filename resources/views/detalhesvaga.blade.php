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
            {{-- {{ $vaga->titulo }} --}}
            Desenvolvedor(a) Full-stack (PHP+Laravel+React)
        </p>
        <p >
            Natal, RN - Aceita remoto
        </p>
    </div>
    <div class="detalhado">
        {{-- <p>{{ $vaga->descricao }}</p> --}}
        <p>Somos uma startup voltada para a área de documentação e registro, cujo objetivo é possibilitar a adoção de novas tecnologias nos serviços notariais e de registro.</p>
    </div>
    <div class="divsalario">
        {{-- <p>Remuneração: <strong>{{ isset($vaga->remuneracao) ? realMoney($vaga->remuneracao) : 'A combinar' }}</strong></p> --}}
        <p>Remuneração: <strong>R$ 800,00</strong></p>
    </div>

    <h3>Requesitos</h3>
    <div class="divsessao">
        <ul>
            <li>PHP + Laravel</li>
            <li>Javascript + React</li>
            <li>Versionamento GIT</li>
        </ul>
    </div>
    
    <h3>Benefícios</h3>
    <div class="divsessao">
        <ul>
            <li>Contribuição nos lucros</li>
        </ul>
    </div>
    <hr />
    <br />

    <h3>Contato</h3>
    <div class="divsessao">
        <p>Interessados mandar o CV e o repositório (Github, BitBucket) para garantistas@coding.com</p>
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