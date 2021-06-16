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

<div class="author">
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">last name</th>
            <th scope="col">Genre</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
        <tr>
            <th scope="row">{{$author->id}}</th>
            <td>{{$author->name}}</td>
            <td>{{$author->id}}</td>
            <td>NAME HERE</td>
        </tr>
        @endforeach
        </tbody>
    </table>
{{--
    <div class="author">
        @foreach($authors as $author)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$author->name}}</h5>
                    <a href="{{route('authors.show', $author->id)}}" class="btn btn-primary">Zie author</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
--}}

<a class="btn" href="{{route('authors.create')}}">Create a new Author</a>
</body>
</html>
