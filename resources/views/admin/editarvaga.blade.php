@extends('layouts.admin_new')

@section('css')
<style>

</style>
@endsection

@section('content')
<div> @include('flash::message') </div>
<div class="containercadastro p-4">
    <h1>Cadastrar Vaga</h1>
        @include('componentes.admin.formeditarvaga')
</div>
@endsection