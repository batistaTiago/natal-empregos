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
                    <button class="botao">Agende já</button>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-10 my-3 cartaoservico">
            <div class="row">
                <img class='imagemcartaoservico my-4' src="{{asset("img/imagemservico2.jpg")}}">
            </div>
            <div class="textoscartaoservico row">
                <h3 class="tituloservico">
                    <a href="">Coronga vírus: o que você precisa saber</a>
                </h3>
                <div class="descricaozinha">
                    <p>
                        A doença do coronavírus (COVID-19) é uma doença infecciosa causada por um coronavírus recém-descoberto.
                    </p>
                </div>
                <div class="rodapeservico">
                    <a href="">Saiba mais</a>
                    <button class="botao">Agende já</button>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-10 my-3 cartaoservico">
            <div class="row">
                <img class='imagemcartaoservico my-4' src="{{asset("img/imagemservico3.jpg")}}">
            </div>
            <div class="textoscartaoservico row">
                <h3 class="tituloservico">
                    <a href="">Lowrider</a>
                </h3>
            <div class="descricaozinha">
                <p>Coming through fo' real we Cypress Hill, oh baby</p>
                <p>Got that crunk, for yo' trunk, going gangsta crazy</p>
            </div>
            <div class="rodapeservico">
                <a href="">Saiba mais</a>
                <button class="botao">Agende já</button>
            </div>
        </div>
    </div>


    {{-- <div class="cartaoservico row">
        <div class="col-4">
            <img class='imagemcartaoservico' src="{{asset("img/imagemservico1.jpg")}}">
        </div>
        <div class="textoscartaoservico col-8">
            <h3 class="tituloservico">
                    <a href="">Assunto do momento</a>
            </h3>
            <div class="descricaozinha">
                <p>Os Trending Topics, ou Assuntos do Momento, são uma seleção dos termos e tópicos mais falados no Twitter durante um determinado período de tempo.</p>
            </div>
            <div class="rodapeservico">
                <a href="">Continue lendo</a>
                <p>Enviado 03/08/2020 as 23:20</p>
            </div>
        </div>
    </div> --}}

    <hr />

    {{-- <div class="cartaoservico row">
        <div class="col-4">
            <img class='imagemcartaoservico' src="{{asset("img/imagemservico2.jpg")}}">
        </div>
        <div class="textoscartaoservico col-8">
            <h3 class="tituloservico">
                <a href="">Coronga vírus: o que você precisa saber</a>
            </h3>
            <div class="descricaozinha">
                <p>
                    A doença do coronavírus (COVID-19) é uma doença infecciosa causada por um coronavírus recém-descoberto.
                </p>
            </div>
            <div class="rodapeservico">
                <a href="">Continue lendo</a>
                <p>Enviado 03/08/2020 as 23:20</p>
            </div>
        </div>
    </div> --}}

    <hr />

    {{-- <div class="cartaoservico row">
        <div class="col-4">
            <img class='imagemcartaoservico' src="{{asset("img/imagemservico3.jpg")}}">
        </div>
        <div class="textoscartaoservico col-8">
            <h3 class="tituloservico">
                <a href="">Lowrider</a>
            </h3>
            <div class="descricaozinha">
                <p>Coming through fo' real we Cypress Hill, oh baby</p>
                <p>Got that crunk, for yo' trunk, going gangsta crazy</p>
                
            </div>
            <div class="rodapeservico">
                <a href="">Continue lendo</a>
                <p>Enviado 03/08/2020 as 23:20</p>
            </div>
        </div>
    </div> --}}
</div> 

@endsection

@section('js')
<script>

    $(() => {
        // escrever todo o código js aqui dentro

        

    });

</script>
@endsection

