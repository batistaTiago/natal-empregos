@extends('layouts.admin_new')

@section('css')
<style>

</style>
@endsection

@section('content')
<div> @include('flash::message') </div>
<div class="containercadastro">
    <h1 class='p-2'>Cadastrar Empresa</h1>
    @include('componentes.admin.formcadastroempresa')
    <div class='d-flex justify-content-center mt-3'>
      <a  id="backtolistagem" class="botaoadmin mx-1" href="{{route('admin.empresa.listar')}}">
          Voltar  
      </a>
      <a id="cadastrar-empresa-form" class="botaoadmin mx-1" href="{{route('admin.empresa.cadastrar.form')}}">
        Enviar  
      </a>
  </div>
</div>
@endsection