@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="heroisobre">
    <img class='imagemheroisobre' src="{{asset("img/heroisobre.jpg")}}">
</div>

<div class="container containersobre">    
    <div class="missao">
        <h2>Missão</h2>
        <p>Atender e melhorar a performance das pessoas e das empresas.</p>
    </div>
    <div class="visao">
        <h2>Visão</h2>
        <p>Vender inteligência empresarial e pessoal.</p>
    </div>
    <div class="valores">
        <h2>Valores</h2>
        <p>Foco no Cliente, responsabilidade pessoal e profissional, 
            gostar de servir, gostar de aprender, resolutividade, respeito
            e gratidão.            
        </p>
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

