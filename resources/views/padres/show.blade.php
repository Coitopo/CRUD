<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $parent->name }}</title>
</head>
<body>
    <h1>{{ $parent->name }}</h1>
    <p>{{ $parent->genre }}</p>
    <a href="{{ route('parents.edit', $parent->$id) }}">Edit names</a>
    <br>
    <br>    
    <form action="{{ route('parents.destroy', $parent->id) }}" method="post">
        @method('delete')
        @csrf

<button type="submit">Delete</button>
</form>
</body>
</html>