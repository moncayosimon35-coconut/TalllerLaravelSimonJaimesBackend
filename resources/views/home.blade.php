<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Ludoteca</title>
</head>
<body>
    <h1>Bienvenido a la Gestión de Ludoteca</h1>
    <nav>
        <a href="{{ route('idiomas.index') }}">Idiomas</a> |
    <a href="{{ route('juegos.index') }}">Juegos</a> |
    <a href="{{ route('expansiones.index') }}">Expansiones</a> |
    <a href="{{ route('buscar') }}"><strong>Búsqueda Avanzada</strong></a>
    </nav>
</body>
</html>