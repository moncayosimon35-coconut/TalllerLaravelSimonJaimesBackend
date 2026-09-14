<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Idioma</title>
</head>
<body>
    <h2>Detalle del Idioma</h2>
    <p><strong>ID:</strong> {{ $idioma->id }}</p>
    <p><strong>Nombre:</strong> {{ $idioma->nombre }}</p>
    <p><strong>Código:</strong> {{ $idioma->codigo }}</p>
    <br>
    <a href="{{ route('idiomas.index') }}">Volver al listado</a>
</body>
</html>