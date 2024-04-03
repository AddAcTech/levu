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

        <form action="/tasks" method="POST">
        @csrf
            <label for="title">Título de la tarea:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="body">Cuerpo de la tarea:</label><br>
            <textarea id="body" name="body"></textarea><br>
            <input type="submit" value="Submit">
        </form>

        <h2>Your Tasks</h2>
        @foreach($tasks as $task)
        <div>
            <h3>{{ $task->title }}</h3>
            <p>{{ $task->body }}</p>
            <p>Status: {{ $task->is_completed ? 'Completed' : 'Not Completed' }}</p>
        </div>
        @endforeach    
    @endauth

    @guest
        <h2>Debes iniciar sesión</h2>
        <a href="/login">Iniciar sesión</a>
    @endguest
</body>
</html>