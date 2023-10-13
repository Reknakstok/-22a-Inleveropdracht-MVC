<!DOCTYPE html>
<html>

<head>
    <title>Opdracht Weergave</title>
</head>

<body>
    <h1>Naam: {{ $name }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Naam</th>
                <th>Herkomst</th>
                <th>Voorraad</th>
                <th>Prijs</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fruits as $fruit)
            <tr>
                <td>{{ $fruit->name }}</td>
                <td>{{ $fruit->origin }}</td>
                <td>{{ $fruit->stock }}</td>
                <td>${{ number_format($fruit->price, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>