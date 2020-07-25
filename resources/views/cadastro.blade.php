@extends('layouts.area_do_cliente')

@section('css')
<style>
    
</style>
@endsection

@section('content')
<div class="containercadastro">
    <h1>Cadastro</h1>
        <form action="/enviar" method="POST">
        @csrf
        <div class="divinputs">
            <label for="empresa">Nome da empresa</label>
            <input class="inputs" type="text" name="empresa" id="empresa" placeholder="Nome da empresa">
            <label for="remoto" class="text-muted">Você deseja que o nome da empresa apareça no anúncio da vaga?</label>
            <div class="mostraranuncio">
                <input type="checkbox" id="sim" name="sim" style="margin-left: 1em">
                <label for="sim">Sim</label>
                <input type="checkbox" id="nao" name="nao" style="margin-left: 1em">
                <label for="nao">Não</label>
            </div>

            <label for="titulo">Título da vaga</label>
            <input class="inputs" type="text" name="titulo" id="titulo" placeholder="Título da vaga">

            <label for="subtitulo">Subtítulo</label>
            <input class="inputs" type="text" name="subtitulo" id="subtitulo" placeholder="Ex: Descrição resumida da vaga">

            <label for="titulo">Foto</label>
            <input class="inputs" type="file" name="foto" id="foto">

            <label for="local">Local de trabalho</label>
            <input class="inputs" type="text" name="local" id="local" placeholder="Local de trabalho">

            <label for="descricao">Descrição da vaga</label>
            <textarea type="textarea" name="descricao" id="descricao" rows="10" placeholder=" Descrição detalhada da sua vaga"></textarea>

            <label for="contrato">Benefícios</label>
            <input class="inputs" type="text" name="beneficios" id="beneficios" placeholder="Ex: vale transporte, vale alimentação...">
            
            <label for="titulo">Remuneração</label>
            <input class="inputs" type="number" name="remunerecao" id="remunerecao" placeholder="Remuneração (somente números)">
            
            <label for="contrato">Tipo de contratação</label>
            <div class="remoto">
                <select class="inputs" name="contrato" id="contrato" placeholder="Selecione um">
                    <option value="">Selecione um</option>
                    <option value="clt">CLT</option>
                    <option value="pj">PJ</option>
                </select>
                <input type="checkbox" id="remoto" name="remoto" style="margin-left: 1em">
                <label for="remoto">Remoto?</label>
            </div>
            <button class="botao">Criar vaga</button>
        </div>
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