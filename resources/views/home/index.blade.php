<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Inicio</h1>
    @auth
        <h2>{{ auth()->user()->username }}, estas son tus tareas:</h2>
        <p><a href="/logout">Cerrar sesión</a></p>

    @endauth

    @guest
        <h2>Debes iniciar sesión</h2>
        <a href="/login">Iniciar sesión</a>
    @endguest
</body>
</html>