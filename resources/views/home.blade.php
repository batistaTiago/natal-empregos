@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="container">
    @foreach ($data as $idx => $vaga)
        <div class="cartao">
            {{-- <p>{{ $idx + 1 }}</p> --}}
            <p class="titulo">{{$vaga->titulo}}</p>
            <div class="empresacidade">
                <p>
                    {{$vaga->sub_titulo}}
                </p>
                <p>
                    Natal,RN
                </p>
            </div>
            <div class="subtitulo">
                <div class="detalhes">
                    <p class="fontezinha"><b>Contrato</b>: {{ $vaga->regime->nome }}</p>
                        <p class="fontezinha"><b>Remuneração:</b> R$ {{ $vaga->remuneracao }}</p>
                        <p class="fontezinha"><b>Benefícios:</b> {{ $vaga->observacoes }}</p>
                        
                    </p>
                </div>
                <div>
                    <img class="imagem" src='/img/arquivo.jpg'>
                </div>
                
            </div>
            <p class="descricao">
            {{$vaga->descricao}}
            </p>
        </div>
    @endforeach
        {{-- 
        
         --}}

</div>
@endsection

@section('js')
<script>

    $(() => {
        // escrever todo o código js aqui dentro

        

    });

</script>
@endsection