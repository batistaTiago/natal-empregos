@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="container">
    <div class="containercartao row">
        @foreach ($data as $idx => $vaga)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="cartao">
              {{--
              <p>{{ $idx + 1 }}</p>
              --}}
              <p class="titulo">Analista de Banco de Dados</p>
              <div class="empresacidade">
                <p class="">
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
        
        <div class="paginacao">
            <button><<</button>
            <button><</button>
            <button disabled>1</button>
            <button>2</button>
            <button>3</button>
            <button>></button>
            <button>>></button>
        </div>
        <div class="newsletter">
            <p>Receba as vagas em primeira mão</p>
            <form action="">
                <div class="newsform">
                    <p>Preencha os seus dados e iremos enviar novas vagas assim que surgirem</p>
                    <input type="text" id="newsnome" name="newsnome" class="newsinput" placeholder="Digite seu nome">
                    <input type="email" id="newsemail" name="newsemail" class="newsinput" placeholder="Digite seu email">
                </div>
                <button class="botao">Receber vagas</button>
                <p id="privacidade">Não iremos compartilhar suas informações com ninguém.</p>
            </form>
        </div> 
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