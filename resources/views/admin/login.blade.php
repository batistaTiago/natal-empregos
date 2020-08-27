<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natal Empregos - Login</title>
</head>
<body>

    <form method="POST" action="{{ route('admin.login.callback') }}">
        @csrf
            <div class='d-flex justify-content-center'>
                <h1 class='mb-2'>Faça login para entrar</h1>
                <p>Email</p>
                <input type="email" name="email" style='width: 60%'>
                <p>Senha</p>
                <input type="password" name="password"  style='width: 60%'>
            </div>
            <button class='botao mt-2'>Entrar</button>
    </form>

</body>
</html>
