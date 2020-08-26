@extends('layouts.admin_new')

@section('css')

@endsection

@section('content')
    <div class='container'> 
        <h2 class="text-center my-5">Lista de Contatos</h2>
        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Assunto</th> 
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mensagem</th>
                    </tr>
                </thead>
                <div> @include('flash::message') </div>

                <tbody>
                    @foreach($contatos as $contato)
                        <tr>
                            <td>{{$contato->nome}}</td>
                            <td>{{$contato->assunto}}</td>
                            <td>{{$contato->telefone}}</td>
                            <td>{{$contato->email}}</td>
                            <td>{{$contato->mensagem}}</td>
                            
                            @if($contato->lido): 
                                <td>Lido</td>
                            @else: 
                                <td>Nao lido</td>
                            @endif


                            <td>
                                <div class="spread-flex-container px-3">
                                    <div>
                                        <a href="{{ route('admin.contato.ler', [ $empresa->id ]) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </div>
                                    <div>
                                        <form action="{{route('deletar.contato')}}" method="DELETE">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$contato->id}}">
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