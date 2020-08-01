<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7725e2dc25.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">


    @yield('css')

    <title>Bem vindo a Natal Empregos</title>
	<div class='header'>
		<div class="sideMenu">
			<div class="administracao">Administração</div>
			<div class='userContent'>
				<div>Foto</div>
				<div>
					<div class="nome">Emanuele</div>
					<div class="email">emanuele@email.com</div>
				</div>
			</div>

			<div class="botoes">
				<img src="{{ asset('img/vagas.svg') }}" alt="">
				<div class="texto">Vagas</div>
			</div>

			<div class="botoes">
				<img src="{{ asset('img/contatos.svg') }}" alt="">
				<div class="texto">Contatos</div>
			</div>
			<div class="botoes">
				<img src="{{ asset('img/blog.svg') }}" alt="">
				<div class="texto">Blog</div>
			</div>
			<div class="botoes">
				<img src="{{ asset('img/sair.svg') }}" alt="">
				<div class="texto">Sair</div>
			</div>
		</div>
		<div class="topo"></div>
	</div>
</head>
<body>
	<div class="wrapper">
		@yield('content')
	</div>
</body>
</html>


    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- popper (dependencia do boostrap) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <!-- sweet alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    
    @yield('modal')

    @yield('js')

</body>
</html>
