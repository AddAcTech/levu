<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Levu</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#202020] h-screen w-full flex items-center justify-center" style="background-image: url('https://i.pinimg.com/originals/ea/e0/df/eae0dfd3867b998e2417cfbcd1812d8c.jpg'); background-size: cover; background-position: center;">
    <form action="/register" method="POST" class="flex flex-col w-fit p-10 bg-white border-t-2 border-[#00aeef] gap-3">
        <h1 class="font-medium text-xl">Registrate</h1>
        @csrf
        <div class="flex gap-3">
            <input type="text" name="username" placeholder="Nombre de Usuario" class="p-2 border bg-[#f8f9fa]">
            <input type="email" name="email" placeholder="Correo Electronico" class="p-2 border bg-[#f8f9fa]">
        </div>
        <input type="password" name="password" placeholder="Contraseña" class="p-2 border bg-[#f8f9fa]">
        <input type="password" name="password_confirmation" placeholder="Confirmar contraseña " class="p-2 border bg-[#f8f9fa]">
        <input type="submit" value="REGISTRARSE" class="p-2 border border-[#3fc2f3] font-bold rounded-md hover:bg-[#3fc2f3] transition-all ease-in-out duration-300">
        <p class="text-[#969da2]">Ya tienes una cuenta? <a href="/login" class="text-[#2aaada] hover:underline font-bold">Inicia Sesión</a></p>
    </form>
</body>
</html>