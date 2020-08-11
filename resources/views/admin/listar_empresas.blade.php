@extends('layouts.admin_new')

@section('css')

@endsection

@section('content')
    <div class='container'> 
        <h2 class="text-center my-5">Lista de Empresas</h2>
        <button class="botao my-2">Adicionar Empresa</button>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nome da empresa</th>
                        <th scope="col">Cnpj</th> 
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($empresas as $empresa)
                        <tr>
                            <td>{{$empresa->nome}}</td>
                            <td>{{$empresa->cnpj}}</td>
                            <td>
                                <div class="spread-flex-container px-3">
                                    <a href="/">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="/" class="text-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')

@endsection