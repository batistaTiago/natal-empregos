@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div class="containercartao">
        @foreach ($data as $idx => $vaga)
            <div class="cartao">
                {{-- <p>{{ $idx + 1 }}</p> --}}
                <p class="titulo">Analista de Banco de Dados</p>
                <div class="empresacidade">
                    <p class="">
                        Garantistas Coding SA
                    </p>
                    <p>
                        Natal, RN
                    </p>
                </div>    
                <p class="fontezinha">Contrato: {{ $vaga->regime->nome }}</p>
                <p class="fontezinha">Remuneração R$ {{ $vaga->remuneracao }}</p>
                <p class="fontezinha">Benefícios: Vale transporte, Vale refeição</p>
                <p class="descricao">
                    Checkboxes are used to let a user select one or more options of a limited number of choices. 
                    Checkboxes are used to let a user select one or more options of a limited number of choices.
                </p>
            </div>
        @endforeach
            <div class="newsletter">
                <p>Cadastre seu email para receber as novas oportunidades em primeira mão.</p>
                <div class="newsform">
                    <form action="">
                        <input type="email" id="newsletter" name="newsinput" class="newsinput" placeholder="Ex: natal@empregos.com">
                    </form>
                    <button class="botao" style="margin-left: 3vw; width: 5em">Enviar</button>
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