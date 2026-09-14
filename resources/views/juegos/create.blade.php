<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Juego</title>
</head>
<body>
    <h2>Crear Juego</h2>
    <form action="{{ route('juegos.store') }}" method="POST">
        @csrf
        <label>Título: <input type="text" name="titulo" required></label><br><br>
        <label>Año: <input type="number" name="anio" required></label><br><br>
        <label>Idioma:
            <select name="idioma_id" required>
                @foreach($idiomas as $idioma)
                    <option value="{{ $idioma->id }}">{{ $idioma->nombre }}</option>
                @endforeach
            </select>
        </label><br><br>
        <button type="submit">Guardar Juego</button>
    </form>
    <br>
    <a href="{{ route('juegos.index') }}">Cancelar</a>
</body>
</html>