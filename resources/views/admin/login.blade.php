<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NatalEmpregos</title>
</head>
<body>

    <form method="POST" action="{{ route('admin.login.callback') }}">
        @csrf
        <input type="email" name="email">
        <input type="password" name="password">
        <button>Submit</button>
    </form>

</body>
</html>
