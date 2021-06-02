<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>


<form method=POST action="{{route('blogs.store')}}">
    @csrf
    <div>
        <label for="label">Post Title</label>
        <input name="title" type="text" placeholder="Title of post">
    </div>
    <div>
        <label class="label">Content here</label>
        <input name="content" type="text" placeholder="Content of blog">
    </div>
    <input type="submit" value="submit">
</form>

<a class="btn" href="{{route('blogs.index')}}">Terug naar het overzicht</a>
</body>
</html>
