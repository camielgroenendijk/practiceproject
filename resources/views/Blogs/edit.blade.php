<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit page</title>
</head>
<body>
<div class="container">
    <form method="POST" action="{{route('blogs.update', $blog->id)}}">
        @csrf
        @method('put')
        <h1>Post</h1>
        <label for="title">Title</label>
        <input  name="title" type="text" value="{{$blog->title}}">

        <label for="content">content</label>
        <input  name="content" type="text" value="{{$blog->content}}">

        <input type="submit" value="update">
    </form>
</div>
</body>
</html>
