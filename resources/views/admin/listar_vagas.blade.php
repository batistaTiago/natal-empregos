@extends('layouts.admin_new')

@section('css')

@endsection

@section('content')
    <div class='container'> 
        <h2 class="text-center my-5">Lista de vagas</h2>
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Nome da empresa</th> 
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vagas as $vaga)
                        <tr>
                            <td>{{$vaga->id}}</td>
                            <td>{{$vaga->empresa->nome_fantasia}}</td>
                            <td>
                                <div class="spread-flex-container px-3">
                                    <a href="{{route('deletar.vaga')}}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                <a href="/teste4?id={{$vaga->id}}" class="text-danger">
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