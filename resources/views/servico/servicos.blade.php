@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="heroiservico">
    <img class='imagemheroiservico' src="{{asset("img/heroiservicos.jpg")}}">
</div>

<div class="container divservico">    
    <div class="row">
        @foreach ($servicos as $s)
            <div class="col-lg-5 col-md-10 my-3 cartaoservico">
                <div class="row">
                    <img class='imagemcartaoservico my-4' src="{{asset("img/imagemservico1.jpg")}}">
                </div>
                <div class="textoscartaoservico row">
                    <h3 class="tituloservico">
                            <a href="">Assunto do momento</a>
                    </h3>
                    <div class="descricaozinha">
                        <p>Os Trending Topics, ou Assuntos do Momento, são uma seleção dos termos e tópicos mais falados no Twitter durante um determinado período de tempo.</p>
                    </div>
                    <div class="rodapeservico">
                        <a href="">Saiba mais</a>
                        <button class="botao botao-agendar-servico">Agende já</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> 
<hr class="separador">
<div class="d-flex flex-column text-center mb-4">
    <h3>Conheça nossos pacotes de serviço!</h2>
        <span>1 - Currículo criativo: R$ 40,00</span>
        <span>2 - Currículo criativo + Consultoria sobre o currículo: R$ 60,00</span>
        <span>3 - Pacote Master (Instrução e aprimoramento de currículo): R$ 150,00</span>
        
</div>

@endsection

@section('js')
<script>

    $(() => {
        // escrever todo o código js aqui dentro

        $('.botao-agendar-servico').on('click', e => {
            $('.form-container').hide();
            $('.agendar-form').show();
            $('#modal').modal('show');
        });

    });

</script>
@endsection