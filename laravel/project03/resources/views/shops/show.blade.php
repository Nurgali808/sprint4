<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>

        <a href="{{route('shops.create')}}">All tovar: </a>

        <h3>{{$shop->title}}</h3>
        <p>{{$shop->content}}</p>

        <a href="{{route('shops.edit', $shop->id)}}">Edit</a>


</body>
</html>
