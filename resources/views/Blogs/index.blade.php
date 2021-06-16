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
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        @foreach($blogs as $blog)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$blog->title}}</h5>
                <p class="card-text">{{$blog->content}}</p>
                <a type="button" class="btn btn-outline-primary" href="{{route('blogs.show', $blog->id)}}">Show details</a>
            </div>
        </div>
    </div>
    <div class="col">
        @endforeach
    </div>
</div>

{{--
<div class="blogs">
    <div class="blog">
        @foreach($blogs as $blog)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$blog->title}}</h5>
                    <p class="card-text">{{$blog->content}}</p>

                    <a href="{{route('blogs.show', $blog->id)}}" class="btn btn-primary">Zie Post</a>
                </div>
            </div>
        @endforeach
    </div>
</div>--}}

<a class="btn" href="{{route('blogs.create')}}">Create a new post</a>
</body>
</html>
