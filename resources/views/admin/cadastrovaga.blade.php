@extends('layouts.admin_new')

@section('css')
<style>

</style>
@endsection

@section('content')
<div> @include('flash::message') </div>
<div class="containercadastro p-4">
    <h1>Cadastrar Vaga</h1>
        <form action="{{route('cadastrar.vaga')}}" method="POST">
        @csrf
        <div class="divinputs">
          <label for="empresa">Nome da empresa</label>
          <div class="input-group">
            <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Nome da empresa" aria-label="Input group example" aria-describedby="btnGroupAddon">
            <div class="input-group-append">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                Adicionar uma nova empresa
              </button>
              {{-- <div class="input-group-text" id="btnGroupAddon">@</div> --}}
            </div>
        </div>
            <label for="remoto" class="text-muted">Você deseja que o nome da empresa apareça no anúncio da vaga?</label>

            <div class="mostraranuncio">
                <input type="radio" id="sim" name="sim" style="margin-left: 1em">
                <label for="sim">Sim</label>
                <input type="radio" id="nao" name="sim" style="margin-left: 1em">
                <label for="nao">Não</label>
            </div>
            
            <div class="row">
              <div class="col-6">
                <label for="titulo">Título da vaga</label>
                <input class="inputs form-control" type="text" name="titulo" id="titulo" placeholder="Título da vaga">
              </div>

              <div class="col-6">
                <label for="subtitulo">Subtítulo</label>
                <input class="inputs form-control" type="text" name="subtitulo" id="subtitulo" placeholder="Ex: Descrição resumida da vaga">
              </div>

              <div class="col-12">
                <label for="requisitos">Requisitos</label>
                <input class="inputs form-control" type="text" name="requisitos" id="requisitos" placeholder="Ex: 2º Grau completo, Bacharelado...">
              </div>
            </div>

            <label for="descricao">Descrição da vaga</label>
            <textarea type="textarea" class="form-control" name="descricao" id="descricao" rows="10" placeholder="Descrição detalhada da sua vaga"></textarea>

            <label for="contrato">Benefícios</label>
            <div class="row justify-content-around d-flex">
              @foreach ($beneficios as $beneficio)
                <div class="align-items-center">
                <input id="beneficio_{{$beneficio->id}}" type="checkbox" name="beneficios[{{$beneficio->id}}]">
                  <label for="beneficio_{{$beneficio->id}}">{{$beneficio->nome}}</label>
                </div>
              @endforeach
            </div>
            <div class="row">
              <div class="col">
                <label for="remuneracao">Remuneração</label>
                <input class="inputs form-control" type="number" name="remunerecao" id="remunerecao" placeholder="Remuneração (somente números)">
              </div>
              <div class="col"> 
                <label for="contato">Contato</label>
                <input class="inputs form-control" type="text" name="contato" id="contato" placeholder="Ex: Dados para contato">
              </div>
            </div>
            <label for="contrato">Tipo de contratação</label>
            <div class="remoto">
                <select class="inputs form-control" name="regime_contratacao_id" id="contrato" placeholder="Selecione um">
                    <option value="">Selecione um</option>
                    @foreach ($regime as $reg)
                      <option value="{{$reg->id}}">{{$reg->nome}}</option>
                    @endforeach
                </select>
                <input type="checkbox" id="remoto" name="remoto" style="margin-left: 1em">
                <label for="remoto">Remoto?</label>
                <input type="checkbox" id="ativa" name="ativa" style="margin-left: 1em">
                <label for="ativa">Ativa?</label>
            </div>
            <div style="display: flex; justify-content: center; margin-top: 2vh;">
                <a  class="botao my-2" href="{{route('cadastrar.vaga.form')}}">
                  Voltar  
                </a>
                <button type="submit" class="botao ml-3">
                    Enviar
                </button>
            </div>
        </div>
    </form>
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
              
              if(response=="json"){
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



        @include('admin.cadastroempresa')



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
        <label for="novaEmpresaFormSubmitButton" type="submit" class="btn btn-primary">Enviar</label>
      </div>
    </div>
  </div>
</div>

@endsection
