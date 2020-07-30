@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="container">
    <div class="mt-5 mb-2 containercartao row">
        @foreach ($data as $idx => $vaga)
        <div class="my-3 col-sm-12 col-md-6 col-lg-4">
            <div class="cartao">
              {{--
              <p>{{ $idx + 1 }}</p>
              --}}
              <p class="titulo text-center">Analista de Banco de Dados</p>
              <div class="empresacidade">
                <p>
                  Garantistas Coding SA
                </p>
                <p>
                  Natal, RN
                </p>
              </div>
              <p class="fontezinha">Regime de contratação: {{ $vaga->regime->nome }}</p>
              <p class="fontezinha">Salário: {{ realMoney($vaga->remuneracao) }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div style="display: flex; justify-content: center">
        <div class="paginacao">
            {{$data->onEachSide(3)->links()}} 
        </div>
    </div>
</div>
<div class="newsletter">
    <p>Receba as vagas em primeira mão</p>
    <form action="">
        <div class="newsform">
            <p>Preencha os seus dados e iremos enviar novas vagas assim que surgirem</p>
            <input type="text" id="newsnome" name="newsnome" class="newsinput" placeholder="Digite seu nome">
            <input type="email" id="newsemail" name="newsemail" class="newsinput" placeholder="Digite seu email">
        </div>
        <button class="botao">Receber vagas<i class="fas fa-envelope" style="margin-left: 8px;"></i></button>
        <p id="privacidade">Não iremos compartilhar suas informações com ninguém.</p>
    </form>
</div> 

@endsection

@section('js')
<script>

    $(() => {
        // escrever todo o código js aqui dentro

        

    });

</script>
@endsection