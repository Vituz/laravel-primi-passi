<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>

<body>
    <h1> {{ $title }} </h1>

    <h2> {{ $subtitle }} </h2>
    @foreach($brands as $brand)

    @if (!$loop->first)

    <span> - </span>

    @endif

    <h2> {{ $brand }} </h2>

    @endforeach
</body>

</html>