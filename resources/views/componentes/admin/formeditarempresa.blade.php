
<form action="{{ route('admin.empresa.cadastrar.callback') }}" method="POST" id="cadastrar-empresa-form">
    <div class="containercadastro">
        @csrf
        <label for="nome">Nome da empresa</label>
        <input class="inputs form-control" text" name="nome" placeholder="Nome da empresa" value={{ $empresa->nome }}>
        <label for="nome_fantasia">Nome da empresa</label>
        <input class="inputs form-control" type="text" name="nome_fantasia" placeholder="Nome fantasia" value={{ $empresa->nome_fantasia }}>
        <label for="cnpj">CNPJ da empresa</label>
        <input class="inputs form-control" type="number" name="cnpj" placeholder="CNPJ" value={{ $empresa->cnpj }}>
            
        <div style="display: flex; justify-content: center; margin-top: 2vh">
            <button type="submit" class="botao ml-2 d-none" id="novaEmpresaFormSubmitButton">
                Enviar
            </button>
        </div>
    </div>
</form>