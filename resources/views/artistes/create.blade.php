<!DOCTYPE html>
<html>
<head>
    <title>Nou Artista</title>
</head>
<body>
<h1>Nou Artista</h1>

<a href="{{ route('artistes.index') }}">Tornar</a>

<form action="{{ route('artistes.store') }}" method="POST">
    @csrf

    <p>
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" value="{{ old('nom') }}">
    @error('nom')
    <p>{{ $message }}</p>
    @enderror
    </p>

    <p>
        <label for="pais">País:</label><br>
        <input type="text" id="pais" name="pais" value="{{ old('pais') }}">
    @error('pais')
    <p>{{ $message }}</p>
    @enderror
    </p>

    <p>
        <label for="bio">Biografia:</label><br>
        <input type="text" id="bio" name="bio" value="{{ old('bio') }}">
    @error('bio')
    <p>{{ $message }}</p>
    @enderror
    </p>

    <p>
        <label for="imatge_url">Imatge (URL):</label><br>
        <input type="url" id="imatge_url" name="imatge_url"
               value="{{ old('imatge_url') }}">
    @error('imatge_url')
    <p>{{ $message }}</p>
    @enderror
    </p>

    <p>
        <input type="hidden" name="actiu" value="0">
        <label for="actiu">Actiu</label>
        <input type="checkbox" id="actiu" name="actiu" value="1"
            {{ old('actiu') ? 'checked' : '' }}>
    @error('actiu')
    <p>{{ $message }}</p>
    @enderror
    </p>

    <button type="submit">Crear Artista</button>
</form>
</body>
</html>
