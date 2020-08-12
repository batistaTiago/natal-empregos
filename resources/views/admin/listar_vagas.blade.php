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
                <div> @include('flash::message') </div>

                <tbody>
                    @foreach($vagas as $vaga)
                        <tr>
                            <td>{{$vaga->titulo}}</td>
                            <td>{{$vaga->empresa->nome_fantasia}}</td>
                            <td>
                                <div class="spread-flex-container px-3">
                                    <a  data-toggle="modal" data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <div class="text-danger">
                                        <form action="{{route('deletar.vaga')}}" method="POST">
                                            @csrf
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
<script>
    $(() => {
        // escrever todo o código js aqui dentro

        $('#cadastrar-empresa-form').on('submit', async (e) => {
            e.preventDefault();
            
            const form = $(e.currentTarget);

            const nome = form.find('input[name="nome"]').val();
            const nome_fantasia = form.find('input[name="nome_fantasia"]').val();
            const cnpj = form.find('input[name="cnpj"]').val();
            const _token = form.find('input[name="_token"]').val();

            try{ 
              const response = await $.ajax({
                url: form.attr('action'),
                method: form.attr('method'),
                headers: {
                  'accept': 'application/json',
              },
                data: {
                  nome, nome_fantasia, cnpj, _token
                }
              });
              
              if(response=="success"){
              $('#exampleModalCenter').modal('hide');

              await Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: 'Sua empresa foi cadastrada com sucesso',
              });

              }
            
            }
            catch(error){
              $('#exampleModalCenter').modal('hide');

              await Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Houve um erro ao cadastrar empresa',
              });
            }
            
            const option = $('<option>');
            option.text('testando');
            $('#contrato').append(option);
            
        });
    });
</script>
@endsection
@section('modal')

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">



        @include('componentes.admin.formcadastrovaga')



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        <label for="novaEmpresaFormSubmitButton" type="submit" class="btn btn-primary">Enviar</label>
      </div>
    </div>
  </div>
</div>

@endsection
