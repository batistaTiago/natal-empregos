<div class="sideMenu">
    <div class="administracao"> <a href="{{ route('admin.dashboard') }}">Administração</a></div>
    <div class="linha"></div>
    <div class='userContent'>
        <div>
            <img class="foto" src="{{ asset('img/admin.jpg') }}" alt="">
        </div>
        <div class="nomeEmail">
            <div class="nome">Administradora</div>
        </div>
    </div>

    <a href="{{ route('admin.vagas.listar') }}" class="botoes">
        <img src="{{ asset('img/vagas.svg') }}" alt="">
        <div class="texto">Vagas</div>
    </a>

    <a href="{{ route('admin.empresa.listar') }}" class="botoes">
        <img src="{{ asset('img/blog.svg') }}" alt="">
        <div class="texto">Empresas</div>
    </a>

    <a href="{{ route('admin.contato.listar') }}" class="botoes">
        <img src="{{ asset('img/contatos.svg') }}" alt="">
        <div class="texto">Contatos</div>
    </a>

    <div class="linha2"></div>
</div>