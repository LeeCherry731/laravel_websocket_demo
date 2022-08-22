<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo</title>
      @livewireStyles
</head>
<body>
    <h1>base layout</h1>
    <ul>
        <li><a href="{{ route("/") }}">home</a></li>
        <li><a href="{{ route("/shop") }}">shop</a></li>
        <li><a href="{{ route("/cart") }}">cart</a></li>
        <li><a href="{{ route("/checkout") }}">checkout</a></li>
    </ul>
    {{ $slot }}

    @livewireScripts
</body>
</html>
