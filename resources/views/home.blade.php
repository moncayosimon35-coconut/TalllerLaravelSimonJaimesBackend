<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Ludoteca</title>
</head>
<body>
    <h1>Bienvenido a la Gestión de Ludoteca</h1>
    <nav>
        <a href="{{ route('idiomas.index') }}">Gestionar Idiomas</a> |
        <a href="{{ route('juegos.index') }}">Gestionar Juegos</a> |
        <a href="{{ route('expansiones.index') }}">Gestionar Expansiones</a>
    </nav>
</body>
</html>