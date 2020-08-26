
<form action="{{route('admin.empresa.editar.callback')}}" method="POST" id="cadastrar-empresa-form">
    @method('PUT')
    @csrf
    <div class="containercadastro">
        <input type="hidden" name="empresa_id" value='{{ request()->id }}'>
        <label for="nome">Nome da empresa</label>
        <input class="inputs form-control" type="text" name="nome" placeholder="Nome da empresa" value="{{ $empresa->nome }}">
        <label for="nome_fantasia">Nome da empresa</label>
        <input class="inputs form-control" type="text" name="nome_fantasia" placeholder="Nome fantasia" value="{{ $empresa->nome_fantasia }}">
        <label for="cnpj">CNPJ da empresa</label>
        <input class="inputs form-control" type="number" name="cnpj" placeholder="CNPJ" value="{{ $empresa->cnpj }}">
            
        <div style="display: flex; justify-content: center; margin-top: 2vh;">
            <a  class="botao my-2" href="{{route('admin.empresa.listar')}}">
              Voltar  
            </a>
            <button type="submit" class="botao ml-2" id="novaEmpresaFormSubmitButton">
                Enviar
            </button>
        </div>
    </div>
</form>