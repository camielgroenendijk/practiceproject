@extends('layouts.master')
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

<div class="container">
    <h1>Author id:{{$author->id}}</h1>
    <label for="name">Author name:</label>
    <p>{{$author->name}}</p>
</div>
<div class="container">
    <a class="btn" href="{{route('authors.edit', $author->id)}}">Gegevens aanpassen</a>
    <a href="{{route('authors.create')}}">Maak een nieuw blog post!</a>
</div>

<div class="container">
    <form action="{{route('authors.destroy', $author->id)}}" method="post">
        @method('DELETE')
        @csrf
        <input class="btn btn-danger" type="submit" value="delete">
    </form>
</div>
</body>
</html>
