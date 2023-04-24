<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <h1>Add parents</h1>
    <form action="{{ route('parents.store') }}" method="post">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name">

    <br><br>

    <label for="genre">Genre</label>
    <input type="text" genre="genre">
    
    <br><br>

    <button type="submit">Add parents</button>

    </form>
</body>
</html>