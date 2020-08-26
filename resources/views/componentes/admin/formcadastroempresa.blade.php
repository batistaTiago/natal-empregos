


<form action="{{ route('admin.empresa.cadastrar.callback') }}" method="POST" id="cadastrar-empresa-form">
    <div class="containercadastro">
        @csrf
        <label for="nome">Nome da empresa</label>
        <input class="inputs form-control" text" name="nome" placeholder="Nome da empresa" required>
        <label for="nome_fantasia">Nome Fantasia</label>
        <input class="inputs form-control" required type="text" name="nome_fantasia" placeholder="Nome fantasia">
        <label for="cnpj">CNPJ da empresa</label>
        <input class="inputs form-control" required type="number" name="cnpj" placeholder="CNPJ">
            
        <div class="d-none" style="display: flex; justify-content: center; margin-top: 2vh;">
            <a  id="backtolistagem" class="botao my-2" href="{{route('admin.empresa.listar')}}">
              Voltar  
            </a>
            <button id="novaEmpresaFormSubmitButton" type="submit" class="botao ml-3">
                Enviar
            </button>
        </div>
    </div>
</form>