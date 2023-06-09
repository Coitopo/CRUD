<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit parents</h1>
    <form action="{{ route('parents.update', $parent->id) }}" method="post">
        @method('put')
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" value="{{ $parent->name }}">

    <br><br>

    <label for="genre">Genre</label>
    <input type="text" genre="genre" value="{{ $parent->name }}">
    
    <br><br>

    <button type="submit">Edit parents</button>

    </form>
</body>
</html>