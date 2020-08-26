@extends('layouts.admin_new')

@section('css')
<style>

</style>
@endsection

@section('content')
<div> @include('flash::message') </div>
<div class="containercadastro p-4">
    <h1>Cadastrar Empresa</h1>
    @include('componentes.admin.formcadastroempresa')
    <label for="backtolistagem" class="btn btn-secondary">Voltar</label>
    <label for="novaEmpresaFormSubmitButton" class="btn btn-primary">Enviar</label>
</div>
@endsection