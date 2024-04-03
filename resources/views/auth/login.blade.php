<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/login" method="POST" class="">
        @csrf
        <input type="text" name="username" placeholder="User/Email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>