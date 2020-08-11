@extends('layouts.admin_new')

@section('css')

@endsection

@section('content')
    <div class='container'> 
        <h2 class="text-center my-5">Lista de vagas</h2>
        <a  class="botao my-2" href="{{route('cadastrar.vaga.form')}}">Cadastrar Vaga</a>
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
                    <div> @include('flash::message') </div>
                    @foreach($vagas as $vaga)
                        <tr>
                            <td>{{$vaga->titulo}}</td>
                            <td>{{$vaga->empresa->nome_fantasia}}</td>
                            <td>
                                <div class="spread-flex-container px-3">
                                    <a href="{{route('deletar.vaga')}}">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <div class="text-danger">
                                        <form action="{{route('teste')}}" method="GET">
                                            <div>
                                                <input name="id" type="hidden" class="form-control" id="id" value="{{$vaga->id}}">
                                            </div>
                                            <button type="submit"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        
                                    </div>
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