<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Idiomas</title>
</head>
<body>
    <nav>
        <a href="{{ route('idiomas.index') }}">Idiomas</a> |
        <a href="{{ route('juegos.index') }}">Juegos</a> |
        <a href="{{ route('expansiones.index') }}">Expansiones</a>
    </nav>
    <hr>
    <h2>Listado de Idiomas</h2>
    <a href="{{ route('idiomas.create') }}">Crear nuevo Idioma</a><br><br>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>ID</th><th>Nombre</th><th>Código</th><th>Acciones</th>
        </tr>
        @foreach($idiomas as $idioma)
        <tr>
            <td>{{ $idioma->id }}</td>
            <td>{{ $idioma->nombre }}</td>
            <td>{{ $idioma->codigo }}</td>
            <td>
                <a href="{{ route('idiomas.show', $idioma->id) }}">Ver Detalle</a>
                <form action="{{ route('idiomas.destroy', $idioma->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Borrar idioma?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>