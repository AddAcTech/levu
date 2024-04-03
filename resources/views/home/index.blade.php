<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    @auth
        <div>
            <h2>Hola {{ auth()->user()->username }}, estas son tus tareas:</h2>
            <p><a href="/logout">Cerrar sesión</a></p>
        </div>    
        
        <form action="/tasks" method="POST">
            <p>Nueva tarea</p>
        @csrf
            <label for="title">Título de la tarea:</label><br>
            <input type="text" id="title" name="title"><br>
            <label for="body">Cuerpo de la tarea:</label><br>
            <textarea id="body" name="body"></textarea><br>
            <input type="submit" value="Submit">
        </form>

        @foreach($tasks as $task)
        <div>
            <h3>{{ $task->title }}</h3>
            <p>{{ $task->body }}</p>
            <p>Estado: {{ $task->is_completed ? 'Completada' : 'Sin Completar' }}</p>
            
             <!-- Cambiar estado de la tarea -->
            <form action="/tasks/{{ $task->id }}/complete" method="POST">
                @csrf
                @method('PATCH')
                @if($task->is_completed)
                    <input type="submit" value="Mark as Uncompleted">
                @else
                    <input type="submit" value="Mark as Completed">
                @endif
            </form>

            <!-- Eliminar la tarea -->
            <form action="/tasks/{{ $task->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </div>

        @endforeach    

    @endauth

    @guest
        <h2>Debes iniciar sesión</h2>
        <a href="/login">Iniciar sesión</a>
    @endguest
</body>
</html>