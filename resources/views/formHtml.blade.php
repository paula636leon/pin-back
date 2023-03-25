<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Laravel</title>
</head>
<body>
    <form method="post" action="guardar">
        @csrf

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">

        <label for="email">Email</label>
        <input type="email" name="email">

        <input type="submit" name="" id="" value="Enviar">
    </form>
    
</body>
</html>