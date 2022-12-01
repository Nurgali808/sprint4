<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Create </title>
</head>
<body>

<a href="{{ route('shops.index') }}">Go to Index Page</a>


<form action="{{route('shops.store')}}" method="post">
    @csrf
    Title: <input type="text" name="title"> <br>
    Content: <textarea name="content" cols="30" rows="10"></textarea>
    <button type="submit">Save post</button>
</form>


</body>
</html>

