<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Búsqueda Avanzada</title>
</head>
<body>
    <nav>
        <a href="{{ route('idiomas.index') }}">Idiomas</a> |
        <a href="{{ route('juegos.index') }}">Juegos</a> |
        <a href="{{ route('expansiones.index') }}">Expansiones</a> |
        <a href="{{ route('buscar') }}"><strong>Búsqueda Avanzada</strong></a>
    </nav>
    <hr>
    <h2>Búsqueda Avanzada de Juegos de Mesa</h2>

    <form action="{{ route('buscar') }}" method="GET">
        <label>Nombre (Juego o Expansión): 
            <input type="text" name="nombre" value="{{ request('nombre') }}">
        </label><br><br>

        <label>Año desde: 
            <input type="number" name="anio_desde" value="{{ request('anio_desde') }}">
        </label>
        <label>Año hasta: 
            <input type="number" name="anio_hasta" value="{{ request('anio_hasta') }}">
        </label><br><br>

        <label>Idioma: 
            <select name="idioma_id">
                <option value="">-- Todos los idiomas --</option>
                @foreach($idiomas as $idioma)
                    <option value="{{ $idioma->id }}" {{ request('idioma_id') == $idioma->id ? 'selected' : '' }}>
                        {{ $idioma->nombre }}
                    </option>
                @endforeach
            </select>
        </label><br><br>

        <button type="submit">Buscar</button>
        <a href="{{ route('buscar') }}">Limpiar Filtros</a>
    </form>

    <hr>
    <h3>Resultados</h3>
    <table border="1">
        <tr>
            <th>ID</th><th>Título Juego</th><th>Año</th><th>Idioma</th><th>Expansiones Incluidas</th>
        </tr>
        @forelse($juegos as $juego)
        <tr>
            <td>{{ $juego->id }}</td>
            <td>{{ $juego->titulo }}</td>
            <td>{{ $juego->anio }}</td>
            <td>{{ $juego->idioma->nombre ?? 'N/A' }}</td>
            <td>
                <ul>
                    @forelse($juego->expansiones as $exp)
                        <li>{{ $exp->titulo }}</li>
                    @empty
                        <li><em>Sin expansiones</em></li>
                    @endforelse
                </ul>
            </td>
        </tr>
        @empty
        <tr><td colspan="5">No se encontraron resultados</td></tr>
        @endforelse
    </table>
</body>
</html>