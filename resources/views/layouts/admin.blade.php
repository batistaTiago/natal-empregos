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
    <h1>Tela de Administração </h1>

</head>
<body>
<div id="Web_1920__1">
	<svg class="Retngulo_1493">
		<rect id="Retngulo_1493" rx="0" ry="0" x="0" y="0" width="1121" height="88">
		</rect>
	</svg>
	<div id="Grupo_173">
		<svg class="Retngulo_1490">
			<rect id="Retngulo_1490" rx="0" ry="0" x="0" y="0" width="245" height="768">
			</rect>
		</svg>
		<div id="Grupo_7">
			<div id="Administrao">
				<span>Administração</span>
			</div>
		</div>
		<div id="Grupo_5">
			<svg class="Retngulo_1491">
				<rect id="Retngulo_1491" rx="5" ry="5" x="0" y="0" width="225" height="55">
				</rect>
			</svg>
			<div id="Home">
				<span>Home</span>
			</div>
			<div id="home" class="home">
				<svg class="Caminho_435" viewBox="3 2 18 20">
					<path id="Caminho_435" d="M 3 9 L 12 2 L 21 9 L 21 20 C 21 21.10457038879395 20.10456848144531 22 19 22 L 5 22 C 3.895430564880371 22 3 21.10456848144531 3 20 L 3 9 Z">
					</path>
				</svg>
				<svg class="Caminho_436" viewBox="9 12 6 10">
					<path id="Caminho_436" d="M 9 22 L 9 12 L 15 12 L 15 22">
					</path>
				</svg>
			</div>
		</div>
		<div id="Grupo_8">
			<svg class="Caminho_475" viewBox="0 0 225 55">
				<path id="Caminho_475" d="M 220 0 C 222.7614288330078 0 225 2.238576173782349 225 5 L 225 50 C 225 52.76142501831055 222.7614288330078 55 220 55 L 5 55 C 2.238576173782349 55 0 52.76142501831055 0 50 L 0 5 L 220 0 Z">
				</path>
			</svg>
		</div>
		<div onclick="application.goToTargetView(event)" id="Grupo_9">
			<svg class="Retngulo_1492">
				<rect id="Retngulo_1492" rx="5" ry="5" x="0" y="0" width="225" height="55">
				</rect>
			</svg>
			<div id="Vagas">
				<span>Vagas</span>
			</div>
			<div id="file-text" class="file_text">
				<svg class="Caminho_441" viewBox="4 2 16 20">
					<path id="Caminho_441" d="M 14 2 L 6 2 C 4.895430564880371 2 3.999999761581421 2.89543080329895 4 4.000000476837158 L 4 20 C 4 21.10457038879395 4.895430564880371 22 6 22 L 18 22 C 19.10457038879395 22 20 21.10456848144531 20 20 L 20 8 L 14 2 Z">
					</path>
				</svg>
				<svg class="Caminho_442" viewBox="14 2 6 6">
					<path id="Caminho_442" d="M 14 2 L 14 8 L 20 8">
					</path>
				</svg>
				<svg class="Linha_6" viewBox="0 0 8 2">
					<path id="Linha_6" d="M 8 0 L 0 0">
					</path>
				</svg>
				<svg class="Linha_7" viewBox="0 0 8 2">
					<path id="Linha_7" d="M 8 0 L 0 0">
					</path>
				</svg>
				<svg class="Caminho_443" viewBox="8 9 2 2">
					<path id="Caminho_443" d="M 10 9 L 9 9 L 8 9">
					</path>
				</svg>
			</div>
		</div>
		<div id="Grupo_10">
			<svg class="Retngulo_1492_">
				<rect id="Retngulo_1492_" rx="5" ry="5" x="0" y="0" width="225" height="55">
				</rect>
			</svg>
			<div id="Contatos">
				<span>Contatos</span>
			</div>
			<div id="message-square" class="message_square">
				<svg class="message-square_" viewBox="3 3 18 18">
					<path id="message-square_" d="M 21 15 C 21 16.10457038879395 20.10456848144531 17 19 17 L 7 17 L 3 21 L 3 5 C 3 3.895430564880371 3.89543080329895 2.999999761581421 5.000000476837158 3 L 19 3 C 20.10457038879395 3 21 3.895430564880371 21 5 L 21 15 Z">
					</path>
				</svg>
			</div>
		</div>
		<div id="Grupo_12">
			<svg class="Retngulo_1492_ba">
				<rect id="Retngulo_1492_ba" rx="5" ry="5" x="0" y="0" width="225" height="55">
				</rect>
			</svg>
			<div id="Blog">
				<span>Blog</span>
			</div>
			<div id="user" class="user">
				<svg class="Caminho_444" viewBox="4 15 16 6">
					<path id="Caminho_444" d="M 20 21 L 20 19 C 20 16.79086112976074 18.20913887023926 15 16 15 L 8 15 C 5.790861129760742 15 3.999999523162842 16.79086112976074 4 19 L 4 21">
					</path>
				</svg>
				<svg class="Elipse_340">
					<ellipse id="Elipse_340" rx="4" ry="4" cx="4" cy="4">
					</ellipse>
				</svg>
			</div>
		</div>
	</div>
	<div id="Grupo_14">
		<img id="Grupo_de_mscara_1" src="Grupo_de_mscara_1.png" srcset="Grupo_de_mscara_1.png 1x, Grupo_de_mscara_1@2x.png 2x">
		</svg>
		<div id="Arya_Stark">
			<span>Arya Stark</span>
		</div>
	</div>
	<div id="Grupo_174">
		<svg class="Retngulo_1496">
			<rect id="Retngulo_1496" rx="10" ry="10" x="0" y="0" width="600" height="498">
			</rect>
		</svg>
		<div id="Acessos_por_dia">
			<span>Acessos por dia</span>
		</div>
		<div id="Grupo_116">
			<div id="Grupo_107">
				<svg class="Linha_28" viewBox="0 0 483.64 1">
					<path id="Linha_28" d="M 0 0 L 483.639892578125 0">
					</path>
				</svg>
				<svg class="Linha_29" viewBox="0 0 483.64 1">
					<path id="Linha_29" d="M 0 0 L 483.639892578125 0">
					</path>
				</svg>
				<svg class="Linha_30" viewBox="0 0 483.64 1">
					<path id="Linha_30" d="M 0 0 L 483.639892578125 0">
					</path>
				</svg>
				<svg class="Linha_31" viewBox="0 0 483.64 1">
					<path id="Linha_31" d="M 0 0 L 483.639892578125 0">
					</path>
				</svg>
				<svg class="Linha_32" viewBox="0 0 483.64 1">
					<path id="Linha_32" d="M 0 0 L 483.639892578125 0">
					</path>
				</svg>
				<svg class="Linha_33" viewBox="0 0 483.64 1">
					<path id="Linha_33" d="M 0 0 L 483.639892578125 0">
					</path>
				</svg>
				<svg class="Linha_34" viewBox="0 0 483.64 1">
					<path id="Linha_34" d="M 0 0 L 483.639892578125 0">
					</path>
				</svg>
			</div>
			<div id="Grupo_108">
				<div id="ID0K">
					<span>0K</span>
				</div>
				<div id="ID10K">
					<span>10K</span>
				</div>
				<div id="ID20K">
					<span>20K</span>
				</div>
				<div id="ID30K">
					<span>30K</span>
				</div>
				<div id="ID40K">
					<span>40K</span>
				</div>
				<div id="ID50K">
					<span>50K</span>
				</div>
				<div id="ID60K">
					<span>60K</span>
				</div>
			</div>
			<div id="Grupo_109">
				<div id="May">
					<span>Jun</span>
				</div>
				<div id="May_b">
					<span>Jul</span>
				</div>
				<div id="May_ca">
					<span>Aug</span>
				</div>
				<div id="May_cb">
					<span>Sep</span>
				</div>
				<div id="May_cc">
					<span>Oct</span>
				</div>
				<div id="May_cd">
					<span>Nov</span>
				</div>
			</div>
			<div id="Grupo_112">
				<svg class="Linha_64" viewBox="0 0 6 76">
					<path id="Linha_64" d="M 0 76 L 0 0">
					</path>
				</svg>
			</div>
			<div id="Grupo_113">
				<svg class="Caminho_476" viewBox="0 0 6 6">
					<path id="Caminho_476" d="M 0 0">
					</path>
				</svg>
				<svg class="Linha_64_cc" viewBox="0 0 6 102">
					<path id="Linha_64_cc" d="M 0 102 L 0 0">
					</path>
				</svg>
			</div>
			<div id="Grupo_114">
				<svg class="Caminho_477" viewBox="0 0 6 6">
					<path id="Caminho_477" d="M 0 0">
					</path>
				</svg>
				<svg class="Linha_64_cf" viewBox="0 0 6 47">
					<path id="Linha_64_cf" d="M 0 47 L 0 0">
					</path>
				</svg>
			</div>
			<div id="Grupo_115">
				<svg class="Caminho_478" viewBox="0 0 6 6">
					<path id="Caminho_478" d="M 0 0">
					</path>
				</svg>
				<svg class="Linha_64_ci" viewBox="0 0 6 80">
					<path id="Linha_64_ci" d="M 0 80 L 0 0">
					</path>
				</svg>
			</div>
			<div id="Grupo_175">
				<svg class="Caminho_476_ck" viewBox="0 0 6 6">
					<path id="Caminho_476_ck" d="M 0 0">
					</path>
				</svg>
				<svg class="Linha_64_cl" viewBox="0 0 6 102">
					<path id="Linha_64_cl" d="M 0 102 L 0 0">
					</path>
				</svg>
			</div>
			<div id="Grupo_176">
				<svg class="Caminho_476_cn" viewBox="0 0 6 6">
					<path id="Caminho_476_cn" d="M 0 0">
					</path>
				</svg>
				<svg class="Linha_64_co" viewBox="0 0 6 76">
					<path id="Linha_64_co" d="M 0 76 L 0 0">
					</path>
				</svg>
			</div>
		</div>
		<div id="Grupo_119">
			<svg class="Elipse_364">
				<ellipse id="Elipse_364" rx="7" ry="7" cx="7" cy="7">
				</ellipse>
			</svg>
			<div id="Acessos">
				<span>Acessos</span>
			</div>
		</div>
	</div>
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
