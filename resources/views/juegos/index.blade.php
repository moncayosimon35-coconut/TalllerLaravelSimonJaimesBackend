<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juegos</title>
</head>
<body>
    <nav>
        <a href="{{ route('idiomas.index') }}">Idiomas</a> |
        <a href="{{ route('juegos.index') }}">Juegos</a> |
        <a href="{{ route('expansiones.index') }}">Expansiones</a>
    </nav>
    <hr>
    <h2>Listado de Juegos</h2>
    <a href="{{ route('juegos.create') }}">Crear nuevo Juego</a><br><br>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>ID</th><th>Título</th><th>Año</th><th>Idioma</th><th>Acciones</th>
        </tr>
        @foreach($juegos as $juego)
        <tr>
            <td>{{ $juego->id }}</td>
            <td>{{ $juego->titulo }}</td>
            <td>{{ $juego->anio }}</td>
            <td>{{ $juego->idioma }}</td>
            <td>
                <a href="{{ route('juegos.show', $juego->id) }}">Ver Detalle</a>
                <form action="{{ route('juegos.destroy', $juego->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Borrar juego?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>