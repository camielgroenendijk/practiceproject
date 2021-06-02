<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $session_id = Auth::user()->id;
?>
<div class="container">
    <h1>ID: #{{$blog->id}}</h1>
    <label for="title">Title</label>
    <p>{{$blog->title}}</p>
    <label for="content">Content Discription</label>
    <p>{{$blog->content}}</p>
</div>

@if($blog->author->id === $session_id)
<a class="btn" href="{{route('blogs.edit', $blog->id)}}">Gegevens aanpassen</a>
<a href="{{route('blogs.create')}}">Maak een nieuw blog post!</a>

<div class="container">
    <form action="{{route('blogs.destroy', $blog->id)}}" method="post">
        @method('DELETE')
        @csrf
        <input class="btn btn-danger" type="submit" value="delete" >
@endif
    </form>
</div>
</body>
</html>
