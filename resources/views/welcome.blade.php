<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido - Ludoteca</title>
</head>
<body>
    <h1>Sistema de Gestión de Ludoteca</h1>
    <p>Selecciona una opción para comenzar a administrar el sistema:</p>

    <nav>
        <ul>
            <li><a href="{{ route('idiomas.index') }}">Gestionar Idiomas</a></li>
            <li><a href="{{ route('juegos.index') }}">Gestionar Juegos</a></li>
            <li><a href="{{ route('expansiones.index') }}">Gestionar Expansiones</a></li>
        </ul>
    </nav>
</body>
</html>