<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Idioma</title>
</head>
<body>
    <h2>Crear Idioma</h2>
    <form action="{{ route('idiomas.store') }}" method="POST">
        @csrf
        <label>Nombre: <input type="text" name="nombre" required></label><br><br>
        <label>Código: <input type="text" name="codigo" required></label><br><br>
        <button type="submit">Guardar Idioma</button>
    </form>
    <br>
    <a href="{{ route('idiomas.index') }}">Cancelar</a>
</body>
</html>