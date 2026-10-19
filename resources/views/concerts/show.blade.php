<!DOCTYPE html>
<html>
<head>
    <title>Detalls del Concert</title>
</head>
<body>

<h1>Detalls del Concert</h1>

<p>
    <strong>Nom:</strong>
    {{ $concert->nom }}
</p>

<p>
    <strong>Artista:</strong>
    <a href="{{ route('artistes.show', $concert->artista->id) }}">
        {{ $concert->artista->nom }}
    </a>
</p>

<p>
    <strong>País:</strong>
    {{ $concert->artista->pais }}
</p>

<p>
    <strong>Biografia:</strong>
    {{ $concert->artista->bio }}
</p>

<p>
    <strong>Data i hora:</strong>
    {{ $concert->data_hora->format('d/m/Y H:i') }}
</p>

<p>
    <strong>Tipus:</strong>
    {{ $concert->tipus }}
</p>

<p>
    <strong>Durada:</strong>
    {{ $concert->durada_minuts }} minuts
</p>

<a href="{{ route('concerts.index') }}">Tornar als concerts</a>

</body>
</html>
