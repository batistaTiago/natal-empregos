<div class="sideMenu">
    <div class="administracao">Administração</div>
    <div class="linha"></div>
    <div class='userContent'>
        <div>
            <img class="foto" src="{{ asset('img/Toalhinha.jpg') }}" alt="">
        </div>
        <div class="nomeEmail">
            <div class="nome">Emanuele</div>
            <div class="email">emanuele@email.com</div>
        </div>
    </div>

    <a href="{{ route('admin.vagas.listar') }}" class="botoes">
        <img src="{{ asset('img/vagas.svg') }}" alt="">
        <div class="texto">Vagas</div>
    </a>

    <div class="botoes">
        <img src="{{ asset('img/contatos.svg') }}" alt="">
        <div class="texto">Empresas</div>
    </div>
    <div class="botoes">
        <img src="{{ asset('img/blog.svg') }}" alt="">
        <div class="texto">Serviços</div>
    </div>
    <div class="linha2"></div>
</div>