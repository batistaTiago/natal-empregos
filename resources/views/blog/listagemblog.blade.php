@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="heroiblog">
    <img class='imagemheroiblog' src="{{asset("img/heroiblog.jpg")}}">
</div>

<div class="container divblog">    
    <div class="cartaoblog row">
        <div class="col-4">
            <img class='imagemcartaoblog' src="{{asset("img/imagemblog1.jpg")}}">
        </div>
        <div class="textoscartaoblog col-8">
            <h3 class="tituloblog">
                    <a href="">Assunto do momento</a>
            </h3>
            <div class="descricaozinha">
                <p>Os Trending Topics, ou Assuntos do Momento, são uma seleção dos termos e tópicos mais falados no Twitter durante um determinado período de tempo.</p>
            </div>
            <div class="rodapeblog">
                <a href="">Continue lendo</a>
                <p>Enviado 03/08/2020 as 23:20</p>
            </div>
        </div>
    </div>

    <hr />

    <div class="cartaoblog row">
        <div class="col-4">
            <img class='imagemcartaoblog' src="{{asset("img/imagemblog2.jpg")}}">
        </div>
        <div class="textoscartaoblog col-8">
            <h3 class="tituloblog">
                <a href="">Coronga vírus: o que você precisa saber</a>
            </h3>
            <div class="descricaozinha">
                <p>
                    A doença do coronavírus (COVID-19) é uma doença infecciosa causada por um coronavírus recém-descoberto.
                </p>
            </div>
            <div class="rodapeblog">
                <a href="">Continue lendo</a>
                <p>Enviado 03/08/2020 as 23:20</p>
            </div>
        </div>
    </div>

    <hr />

    <div class="cartaoblog row">
        <div class="col-4">
            <img class='imagemcartaoblog' src="{{asset("img/imagemblog3.jpg")}}">
        </div>
        <div class="textoscartaoblog col-8">
            <h3 class="tituloblog">
                <a href="">Lowrider</a>
            </h3>
            <div class="descricaozinha">
                <p>Coming through fo' real we Cypress Hill, oh baby</p>
                <p>Got that crunk, for yo' trunk, going gangsta crazy</p>
                
            </div>
            <div class="rodapeblog">
                <a href="">Continue lendo</a>
                <p>Enviado 03/08/2020 as 23:20</p>
            </div>
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

