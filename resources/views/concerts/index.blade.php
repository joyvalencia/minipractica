<!DOCTYPE html>
<html>
<head>
    <title>Llista de Concerts</title>
</head>
<body>

<h1>Llista de Concerts</h1>

<table style="border: 1px solid black;">
    <tr style="border: 1px solid black;">
        <th style="border: 1px solid black;">Nom</th>
        <th style="border: 1px solid black;">Artista</th>
        <th style="border: 1px solid black;">Data i hora</th>
        <th style="border: 1px solid black;">Tipus</th>
        <th style="border: 1px solid black;">Durada</th>
    </tr>

    @foreach($concerts as $concert)
        <tr>
            <td style="border: 1px solid black;">
                {{ $concert->nom }}
            </td>

            <td style="border: 1px solid black;">
                <a href="{{ route('artistes.show', $concert->artista->id) }}">
                    {{ $concert->artista->nom }}
                </a>
            </td>

            <td style="border: 1px solid black;">
                {{ $concert->data_hora->format('d/m/Y H:i') }}
            </td>

            <td style="border: 1px solid black;">
                @if($concert->tipus == 'CONCERT')
                    <span style="background-color: green; color: white;">
                        {{ $concert->tipus }}
                    </span>
                @elseif($concert->tipus == 'DJ_SET')
                    <span style="background-color: blue; color: white;">
                        {{ $concert->tipus }}
                    </span>
                @elseif($concert->tipus == 'SHOWCASE')
                    <span style="background-color: purple; color: white;">
                        {{ $concert->tipus }}
                    </span>
                @else
                    <span style="background-color: orange; color: white;">
                        {{ $concert->tipus }}
                    </span>
                @endif
            </td>

            <td style="border: 1px solid black;">
                {{ $concert->durada_minuts }}
            </td>
        </tr>
    @endforeach
</table>

<br>

<a href="{{ route('concerts.create') }}">
    <button type="button" id="nouconcert">Nou concert</button>
</a>

</body>
</html>

