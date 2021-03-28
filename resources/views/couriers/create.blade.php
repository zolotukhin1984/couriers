<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create courier | Trips</title>
</head>
<body>
    <h1>Add courier</h1>
    <form action="{{ route('couriers.store') }}" method="post">
        @csrf
        @method('post')
        <label for="name">Name: </label><input type="text" name="name" id="name">
        <br>
        <label for="surname">Surnme: </label><input type="text" name="surname" id="surname">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
