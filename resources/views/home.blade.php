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
    <tbody>
        @foreach ($data as $idx => $vaga)
        <tr>
            <td>{{ $idx + 1 }}</td>
            <td>
                {{ $vaga->titulo }}
            </td>
            <td>
                {{ $vaga->sub_titulo }}
            </td>
            <td>
                {{ $vaga->sub_titulo }}
            </td>
            <td>
                {{ $vaga->regime->nome }}
            </td>
            <td>
                {{ $vaga->remuneracao }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

@section('js')
<script>

    $(() => {
        // escrever todo o código js aqui dentro

        

    });

</script>
@endsection