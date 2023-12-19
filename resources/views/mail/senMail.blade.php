<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Envio Mail</title>
</head>
<body>
    <h1>{{ $details['message'] }}</h1>
    <p>Nombre: {{ $details['first_name'] }}</p>
    <p>Correo: {{ $details['email'] }}</p>
    <p>Número Celular: {{ $details['cell_phone_number'] }}</p>
    <p>Gracias por registrarte!</p>
</body>
</html>