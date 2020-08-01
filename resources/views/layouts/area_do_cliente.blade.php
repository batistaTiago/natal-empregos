<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7725e2dc25.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/system.css') }}" rel="stylesheet">


    @yield('css')

    <title>Bem vindo a Natal Empregos</title>
</head>
<body>
    <div class="containerlayout">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <a class="navbar-brand logolayout" href="#">Natal<strong>Empregos</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse central" id="navbarTogglerDemo02" style="display: flex; justify-content: center">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Blog <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contato</a>
                </li>
              </ul>
            </div>
          </nav>
        
        <div class="abraco">
            @yield('content')
        </div>
        
        <footer class="clientefooter">
            <div class="linksfooter">
                <div class="linksuteis">
                    <p style="font-size: 1.1em">Links úteis</p>
                    <ul>
                        <li><a href="">Sobre a Natal Empregos</a></li>
                        <li><a href="">Fale conosco</a></li>
                        <li><a href="https://www.instagram.com/natal.empregos/"><i class="fab fa-instagram"></i> natal.empregos</a></li>
                        <li><a href="https://www.facebook.com/groups/433243110094657/learning_content/"><i class="fab fa-facebook-square"></i> Natal Empregos</a></li>
                    </ul>
                </div>
                <div class="parceiros">
                    <p style="font-size: 1.1em">Parceiros: </p>
                    <ul>
                        <li><p style="">Garantistas Coding LTDA 2020</p></li>
                        <li><p style="">Outros aliados</p></li>
                    </ul>
                </div>
            </div>
            <p style="text-align: center; color:white">Natal Empregos - 2020</p>
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
    <script>
        function teste() {
            alert("Um código que o usuário jamais poderia ter acesso")
        }
    </script>
</body>
</html>
