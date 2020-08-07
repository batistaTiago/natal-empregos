@extends('layouts.admin')

@section('css')
<style>

</style>
@endsection

@section('content')
    @include('flash::message')
    @include('componentes.cadastrar_empresa_form')
@endsection

@section('js')
<script>

    $(() => {
        // escrever todo o código js aqui dentro



    });

</script>
@endsection