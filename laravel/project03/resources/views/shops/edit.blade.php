<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Create </title>
</head>
<body>

<a href="{{ route('shops.index') }}">Go to Index Page</a>


<form action="{{route('shops.update', $shop->id)}}" method="post">
    @csrf
    @method('PUT')
    Title: <input type="text" name="title" value="{{$shop->title}}"> <br>
    Content: <textarea name="content" cols="30" rows="10">{{$shop->content}}</textarea>
    <button type="submit">Save post</button>
</form>


</body>
</html>

