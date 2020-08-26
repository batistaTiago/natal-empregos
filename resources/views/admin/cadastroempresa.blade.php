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
    <a  id="backtolistagem" class="botao my-2" href="{{route('admin.empresa.listar')}}">
        Voltar  
      </a>
    <label for="novaEmpresaFormSubmitButton" class="btn btn-primary">Enviar</label>
</div>
@endsection