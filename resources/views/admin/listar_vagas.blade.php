@extends('layouts.admin')

@section('css')

@endsection

@section('content')
    <div class='container'> 
        <h2>Lista de vagas</h2>
        <table style="width:100%">
            <tr>
            <th>Título</th>
            <th>Nome da empresa</th> 
            <th>Editar</th>
            <th>Apagar</th>
            </tr>
            <tr>
            <td>Analista de sistemas</td>
            <td>Garantistas Coding LTDA</td>
            <td><i class="fas fa-edit"></i></td>
            <td><i class="fas fa-trash-alt"></i></td>
            </tr>
        
        </table>
    </div>
@endsection

@section('js')

@endsection