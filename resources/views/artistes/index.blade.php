<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SonaFest')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<!-- Navbar (compartida a totes les pàgines) -->
<nav>

</nav>

<!-- Contingut que canvia a cada pàgina -->
<main class="container mx-auto p-4">
    @yield('content')

    <table style="border: 1px solid black;">
        <tr style="border: 1px solid black;">
            <th style="border: 1px solid black;">Nombre</th>
            <th style="border: 1px solid black;">País</th>
            <th style="border: 1px solid black;">Actiu</th>
            <th colspan="2">Accions</th>
        </tr>
        @foreach($artistes as $artista)
            <tr>
                <td style="border: 1px solid black;">{{ $artista->nom }}</td>
                <td style="border: 1px solid black;">{{ $artista->pais }}</td>
                <td style="border: 1px solid black; color: {{ $artista->actiu ? 'green' : 'grey' }};">
                    {{ $artista->actiu ? 'Sí' : 'No' }}
                </td>
                <td style="border: 1px solid black;"><a href="{{ route('artistes.show', $artista->id) }}">SHOW</a></td> <!--accio-->
                <td style="border: 1px solid black;"><a href="{{ route('artistes.edit', $artista->id) }}">EDIT</a></td> <!--accio-->
            </tr>
        @endforeach
    </table>
    <br>
    <a href="{{ route('artistes.create') }}">
        <button type="button" id="nouartista">Nou artista</button>
    </a>

</main>

<!-- Footer (compartit) -->
<footer>
    <p>&copy; {{ date('Y') }} SonaFest</p>
</footer>
</body>
</html>


