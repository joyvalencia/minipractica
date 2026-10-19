<!DOCTYPE html>
<html>
<head>
    <title>Crear Artista</title>
</head>
<body>
<h1>Nou Artista</h1>

<a href="{{ route('artistes.index') }}">Tornar</a>

<!-- Action te lleva a una ruta con POST casi siempre -->
<!-- route es el nombre que le has puesto a la ruta tu mismo en web.php -->
<form action="{{ route('artista.store') }}" method="POST">
    <!-- esto  hay que ponerlo siempre-->
    <!-- habeis oido hablar de cors -->
    @csrf

    <div class="mb-4">
        <label for="nom" class="block font-medium mb-1">Nom de l'artista</label>
        <input type="text"
               id="nom"
               name="nom"
               value="{{ old('nom', $artista->nom ?? '') }}"
               class="w-full border rounded p-2 @error('nom') border-red-500 @enderror"
               required>
        @error('nom')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <p>
        <label>País:</label><br>
        <input type="text" name="pais">
    </p>

    <div class="mb-4">
        <label for="bio" class="block font-medium mb-1">Biografia</label>
        <textarea name="bio"
                  id="bio"
                  rows="4"
                  class="w-full border rounded p-2">{{ old('bio', $artista->bio ?? '') }}</textarea>
        @error('bio')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <p>
        <label>Imatge URL:</label><br>
        <input type="image" name="imatge_url">
    </p>
    <p>
        <label>
            <input type="checkbox" name="actiu" value="1">
            Actiu
        </label>
    </p>
    <div class="mb-4">
        <label class="inline-flex items-center">
            <input type="hidden" name="actiu" value="0">
            <input type="checkbox"
                   name="actiu"
                   value="1"
                   {{ old('actiu', $artista->actiu ?? true) ? 'checked' : '' }}
                   class="mr-2">
            Artista actiu
        </label>
    </div>

    <div class="mb-4">
        <label for="data_hora" class="block font-medium mb-1">Data i hora del concert</label>
        <input type="datetime-local"
               name="data_hora"
               id="data_hora"
               value="{{ old('data_hora', isset($concert) ? $concert->data_hora->format('Y-m-d\TH:i') : '') }}"
               class="w-full border rounded p-2">
        @error('data_hora')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>


</form>
</body>
</html>
