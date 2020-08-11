@extends('layouts.admin')

@section('css')
<style>

</style>
@endsection

@section('content')
    @include('flash::message')
    <form action="{{ route('admin.empresa.cadastrar.callback') }}" method="POST" id="cadastrar-empresa-form">
        <div class="cadastrarempresaconta">
            @csrf
            <label for="nome">Nome da empresa</label>
            <input type="text" name="nome" placeholder="Nome da empresa">
            <label for="nome_fantasia">Nome da empresa</label>
            <input type="text" name="nome_fantasia" placeholder="Nome fantasia">
            <label for="cnpj">CNPJ da empresa</label>
            <input type="number" name="cnpj" placeholder="CNPJ">
                
            <div style="display: flex; justify-content: center; margin-top: 2vh">
                <button type="submit" class="botao">
                Voltar
                </button>    
                <button type="submit" class="botao">
                    Enviar
                </button>
            </div>
        </div>
    </form>
@endsection

@section('js')
<script>

    $(() => {
        // escrever todo o código js aqui dentro



    });

</script>
@endsection