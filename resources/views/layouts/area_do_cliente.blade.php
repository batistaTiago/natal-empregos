<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

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
                    <p href="" class="botaonavbar"><a href="{{ route('cliente.contato.form') }}"> Contato </a></p>
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
