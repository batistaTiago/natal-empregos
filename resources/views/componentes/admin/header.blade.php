<div class="headeradmin ml-3">
    <a class="navbar-brand logoadmin text-light" href="{{ route('admin.dashboard') }}" id="botao">Natal<strong>Empregos</strong></a>
    <form action="{{ route('admin.logout.callback') }}" method="POST">
        <button type="submit" class="btn btn-outline-info mr-2">
            @csrf
            <span>Sair</span>
            <i class="fa fa-sign-out ml-1"></i>
        </button>
    </form>
</div>