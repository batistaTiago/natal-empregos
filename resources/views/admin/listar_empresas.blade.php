@extends('layouts.admin_new')

@section('css')

@endsection

@section('content')
    <div class='container'> 
        <h2 class="text-center my-5">Lista de Empresas</h2>
        <a  class="botaoadmin my-2" href="">Cadastrar Vaga</a>
        <div class="table-responsive mt-3">
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
                                    <div>
                                        <a href="/">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <form action="{{route('deletar.empresa')}}" method="DELETE">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$empresa->id}}">
                                            <button type="submit" class='outline-danger'>
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
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