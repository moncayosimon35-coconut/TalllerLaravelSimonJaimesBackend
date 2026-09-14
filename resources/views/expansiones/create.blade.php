<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Expansión</title>
</head>
<body>
    <h2>Crear Expansión</h2>
    <form action="{{ route('expansiones.store') }}" method="POST">
        @csrf
        <label>Título: <input type="text" name="titulo" required></label><br><br>
        <label>Juego Base:
            <select name="juego_id" required>
                @foreach($juegos as $juego)
                    <option value="{{ $juego->id }}">{{ $juego->titulo }}</option>
                @endforeach
            </select>
        </label><br><br>
        <label>Idioma:
            <select name="idioma_id" required>
                @foreach($idiomas as $idioma)
                    <option value="{{ $idioma->id }}">{{ $idioma->nombre }}</option>
                @endforeach
            </select>
        </label><br><br>
        <button type="submit">Guardar Expansión</button>
    </form>
    <br>
    <a href="{{ route('expansiones.index') }}">Cancelar</a>
</body>
</html>