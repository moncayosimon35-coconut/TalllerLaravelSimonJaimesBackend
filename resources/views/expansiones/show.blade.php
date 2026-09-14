<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Expansión</title>
</head>
<body>
    <h2>Detalle de la Expansión</h2>
    <p><strong>ID:</strong> {{ $expansion->id }}</p>
    <p><strong>Título:</strong> {{ $expansion->titulo }}</p>
    <p><strong>Juego Base:</strong> {{ $expansion->juego_base }}</p>
    <p><strong>Idioma:</strong> {{ $expansion->idioma }}</p>
    <br>
    <a href="{{ route('expansiones.index') }}">Volver al listado</a>
</body>
</html>