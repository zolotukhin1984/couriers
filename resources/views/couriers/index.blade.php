<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Couriers | Trips</title>
</head>
<body>
    <h1>Courier List</h1>
    <ul>
        <li>
            <a href="{{ route('couriers.show', ['courier' => 1]) }}">Jack</a> |
            <a href="{{ route('couriers.edit', ['courier' => 1]) }}">edit</a> |
            <form action="{{ route('couriers.destroy' , ['courier' => 1]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        <li>
            <a href="{{ route('couriers.show', ['courier' => 2]) }}">John</a> |
            <a href="{{ route('couriers.edit', ['courier' => 2]) }}">edit</a> |
            <form action="{{ route('couriers.destroy' , ['courier' => 2]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </li>
        <li>
            <a href="{{ route('couriers.show', ['courier' => 3]) }}">Harry</a> |
            <a href="{{ route('couriers.edit', ['courier' => 3]) }}">edit</a> |
            <form action="{{ route('couriers.destroy' , ['courier' => 3]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </li>
    </ul>
</body>
</html>
