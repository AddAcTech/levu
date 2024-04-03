<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inicia Sesion</h1>
    <form action="/login" method="POST" class="">
        @csrf
        <input type="text" name="username" placeholder="User/Email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Iniciar sesión">
    </form>
    <p>No tienes una cuenta? <a href="/register">Registrate</a></p>
</body>
</html>