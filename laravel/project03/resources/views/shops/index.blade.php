<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
    <body>

        <a href="{{route('shops.create')}}">All tovar: </a>

        @foreach($shops as $shop)
            <a href="{{'shops.show', $shop->id}}"><h3>{{$shop->title}}</h3></a>
            <p>{{$shop->content}}</p>




    @endforeach

    </body>
</html>
