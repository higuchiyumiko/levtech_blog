<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{$post->title}}
        </h1>
        <div class="content">
            <div class="content_post">
                <h3>本文</h3>
                <p>{{$post->body}}</p>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a><br><br>
                <div class="edit"><a href="/posts/{{$post->id}}/edit">編集する</div><br>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>