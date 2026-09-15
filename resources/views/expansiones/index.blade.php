<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Expansiones</title>
</head>
<body>
    <nav>
        <a href="{{ route('idiomas.index') }}">Idiomas</a> |
        <a href="{{ route('juegos.index') }}">Juegos</a> |
        <a href="{{ route('expansiones.index') }}">Expansiones</a> |
        <a href="{{ route('buscar') }}">Búsqueda Avanzada</a>
    </nav>
    <hr>
    <h2>Listado de Expansiones</h2>
    <a href="{{ route('expansiones.create') }}">Crear nueva Expansión</a><br><br>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>ID</th><th>Título</th><th>Juego Base</th><th>Idioma</th><th>Acciones</th>
        </tr>
        @foreach($expansiones as $exp)
        <tr>
            <td>{{ $exp->id }}</td>
            <td>{{ $exp->titulo }}</td>
            <td>{{ $exp->juego->titulo ?? 'N/A' }}</td>
            <td>{{ $exp->idioma->nombre ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('expansiones.show', $exp->id) }}">Ver Detalle</a>
                <form action="{{ route('expansiones.destroy', $exp->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Borrar expansión?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>