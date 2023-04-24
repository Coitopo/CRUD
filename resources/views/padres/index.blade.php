<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superheroes</title>
</head>
<body>
    <h1>SuperHeroes</h1>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Genre</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($parents as $parent)
                <tr>
                    <td><a href="{{ route('parents.show, $parent->id') }}">{{ $parent->name }}</a></td>
                    <td>{{ $parent->genre }}</td>
                </tr>
            @empty

            @endforelse
        </tbody>
    </table>
<br>
<br>

<a href="{{ route('parents.create') }}">Add names</a>
</body>
</html>