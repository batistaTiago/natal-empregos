@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th class="hidden-xs">#</th>
            <th>Titulo</th>
            <th>Sub-titulo</th>
            <th class="hidden-xs">Empresa</th>
            <th class="hidden-xs">Regime de Contratação</th>
            <th class="hidden-xs">Remuneração</th>
        </tr>
    </thead>
</table>
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
        {{-- 
        
         --}}


@endsection

@section('js')
<script>

    $(() => {
        // escrever todo o código js aqui dentro

        

    });

</script>
@endsection