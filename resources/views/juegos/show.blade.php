<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Juego</title>
</head>
<body>
    <h2>Detalle del Juego</h2>
    <p><strong>ID:</strong> {{ $juego->id }}</p>
    <p><strong>Título:</strong> {{ $juego->titulo }}</p>
    <p><strong>Año:</strong> {{ $juego->anio }}</p>
    <p><strong>Idioma:</strong> {{ $juego->idioma }}</p>
    <br>
    <a href="{{ route('juegos.index') }}">Volver al listado</a>
</body>
</html>