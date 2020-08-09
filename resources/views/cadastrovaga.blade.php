@extends('layouts.area_do_cliente')

@section('css')
<style>

</style>
@endsection

@section('content')
<div> @include('flash::message') </div>
<div class="containercadastro">
    <h1>Cadastro</h1>
        <form action="{{route('cadastro.vaga')}}" method="POST">
        @csrf
        <div class="divinputs">
            <label for="empresa">Nome da empresa</label>
            <input class="inputs" type="text" name="empresa" id="empresa" placeholder="Nome da empresa">
            <label for="remoto" class="text-muted">Você deseja que o nome da empresa apareça no anúncio da vaga?</label>


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button>

            <div class="mostraranuncio">
                <input type="checkbox" id="sim" name="sim" style="margin-left: 1em">
                <label for="sim">Sim</label>
                <input type="checkbox" id="nao" name="nao" style="margin-left: 1em">
                <label for="nao">Não</label>
            </div>

            <label for="titulo">Título da vaga</label>
            <input class="inputs" type="text" name="titulo" id="titulo" placeholder="Título da vaga">

            <label for="subtitulo">Subtítulo</label>
            <input class="inputs" type="text" name="subtitulo" id="subtitulo" placeholder="Ex: Descrição resumida da vaga">

            <label for="titulo">Foto</label>
            <input class="inputs" type="file" name="foto" id="foto">

            <label for="local">Local de trabalho</label>
            <input class="inputs" type="text" name="local" id="local" placeholder="Local de trabalho">

            <label for="descricao">Descrição da vaga</label>
            <textarea type="textarea" name="descricao" id="descricao" rows="10" placeholder=" Descrição detalhada da sua vaga"></textarea>

            <label for="contrato">Benefícios</label>
            <input class="inputs" type="text" name="beneficios" id="beneficios" placeholder="Ex: vale transporte, vale alimentação...">

            <label for="titulo">Remuneração</label>
            <input class="inputs" type="number" name="remunerecao" id="remunerecao" placeholder="Remuneração (somente números)">

            <label for="contrato">Tipo de contratação</label>
            <div class="remoto">
                <select class="inputs" name="contrato" id="contrato" placeholder="Selecione um">
                    <option value="">Selecione um</option>
                    <option value="1">CLT</option>
                    <option value="2">PJ</option>
                    @for($i = 0; $i < 100; $i++)
                    <option value="" id="option-teste-{{ $i }}">TESTE</option>
                    @endfor
                </select>
                <input type="checkbox" id="remoto" name="remoto" style="margin-left: 1em">
                <label for="remoto">Remoto?</label>
            </div>
            <div style="display: flex; justify-content: center; margin-top: 2vh">
                <button type="submit" class="botao">
                Voltar
                </button>
                <button type="submit" class="botao">
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

            $('#exampleModalCenter').modal('hide');

            await Swal.fire({
              icon: 'success',
              title: 'Sucesso!',
              text: 'Sua empresa foi cadastrada com sucesso',
            });

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



        @include('componentes.cadastrar_empresa_form')



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
