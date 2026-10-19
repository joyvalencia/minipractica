
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Nou Concert</title>
</head>
<body>

<h1>Nou Concert</h1>

<a href="{{ route('concerts.index') }}">Tornar als concerts</a>

<form action="{{ route('concerts.store') }}" method="POST">
    @csrf

    <p>
        <label for="nom">Nom del concert:</label>
        <input
            type="text"
            id="nom"
            name="nom"
            value="{{ old('nom') }}"
        >
        @error('nom')
        <span>{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label for="artista_id">Artista:</label>

        <select id="artista_id" name="artista_id">
            <option value="">Selecciona un artista</option>

            @foreach ($artistes as $artista)
                <option
                    value="{{ $artista->id }}"
                    {{ old('artista_id') == $artista->id ? 'selected' : '' }}
                >
                    {{ $artista->nom }}
                </option>
            @endforeach
        </select>

        @error('artista_id')
        <span>{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label for="data_hora">Data i hora:</label>
        <input
            type="datetime-local"
            id="data_hora"
            name="data_hora"
            value="{{ old('data_hora') }}"
        >

        @error('data_hora')
        <span>{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label for="durada_minuts">Durada (minuts):</label>
        <input
            type="number"
            id="durada_minuts"
            name="durada_minuts"
            min="15"
            max="300"
            value="{{ old('durada_minuts') }}"
        >

        @error('durada_minuts')
        <span>{{ $message }}</span>
        @enderror
    </p>

    <p>
        <label for="tipus">Tipus de concert:</label>

        <select id="tipus" name="tipus">
            <option value="">Selecciona un tipus</option>

            @foreach (['CONCERT', 'DJ_SET', 'SHOWCASE', 'ACUSTIC'] as $tipus)
                <option
                    value="{{ $tipus }}"
                    {{ old('tipus') == $tipus ? 'selected' : '' }}
                >
                    {{ $tipus }}
                </option>
            @endforeach
        </select>

        @error('tipus')
        <span>{{ $message }}</span>
        @enderror
    </p>

    <button type="submit">Crear concert</button>

</form>

</body>
</html>
