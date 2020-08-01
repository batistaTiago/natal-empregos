@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="container">    
    <div class="searchbar">
        <p>Busque pela vaga de sua preferência</p>
        <form action="" class="searchform mt-2">
                <input type="text" id="searchinput" name="searchinput" class="searchinput " placeholder="Ex: Cozinheiro, Marketing, Soldador, Motorista...">
                <button class="botaosearch"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div class="mt-5 mb-2 containercartao row">
        @foreach ($vagas as $idx => $vaga)
        <div class="my-3 col-sm-12 col-md-6 col-lg-4">
            <div class="cartao">
              {{--
              <p>{{ $idx + 1 }}</p>
              --}}
              <p class="titulo text-center">{{ $vaga->titulo }}</p>
              <div class="empresacidade">
                <p>
                  {{ $vaga->empresa->nome ?? 'TO BE DEFINED' }}
                </p>
                <p>
                  {{ $vaga->empresa->cidade ?? 'TO BE DEFINED' }}
                </p>
              </div>
              <p class="fontezinha">Regime de contratação: {{ $vaga->regime->nome }}</p>
              <p class="fontezinha">Salário: <strong>{{ isset($vaga->remuneracao) ? realMoney($vaga->remuneracao) : 'Não informado' }}</strong></p>
            </div>
        </div>
        @endforeach
    </div>
    <div style="display: flex; justify-content: center">
        <div class="paginacao">
            {{ $vagas->links() }} 
        </div>
    </div>
</div>


    
    @include('componentes.contato_form')

<div class="newsletter">
    <p>Receba as vagas em primeira mão</p>
    <form action="">
        <div class="newsform">
            <p>Preencha os seus dados e iremos enviar novas vagas assim que surgirem</p>
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