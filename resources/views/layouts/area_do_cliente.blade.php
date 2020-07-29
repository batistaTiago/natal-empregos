<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link href="{{ asset('css/system.css') }}" rel="stylesheet">

    @yield('css')

    <title>Bem vindo a Natal Empregos</title>
</head>
<body>
    <div class="containerlayout">
        <div class="navbar">
            <div class="logolayout">
                <a href="">
                    <div style="display: flex">
                        <p>Natal <strong style="color: rgb(202, 123, 18);">Empregos</strong></p>
                    </div>
                </a>
            </div>
            <div class="divmenus">
                <div class="menus">
                    <p href="" class="botaonavbar"> <a href=""> Blog </a></p>
                    <p href="" class="botaonavbar"><a href=""> Anuncie sua vaga </a></p>
                    <p href="" class="botaonavbar"><a href=""> Contato </a></p>
                </div>
            </div>
        </div>

        <div class="abraco">
            @yield('content')
        </div>
        
        <footer class="clientefooter">
                
            <p>Natal Empregos - 2020</p>
            <p>Parceiros: Garantistas Coding LTDA 2020</p>
            <a href="http://localhost:8000/">Saiba Mais</a>
            
            
        </footer>
    </div>

    @yield('js')
</body>
</html>
