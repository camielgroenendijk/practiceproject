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

<a class="btn" href="{{route('authors.create')}}">Create a new post</a>
</body>
</html>
