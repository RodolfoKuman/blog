<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$article->title}}</title>
    <link rel="stylesheet" href="{{asset('css/generals.css')}}">
  </head>
  <body>
    <h1>Hola Rodolfo</h1>
    <br><br>

    <h2>{{ $article->title }}</h2>
    <hr>
    {{$article->content}}
    <hr>
    {{ $article->user->name }} | {{ $article->category->name }} |

    @foreach($article->tags as $tag)
        {{ $tag->name}}
    @endforeach

  </body>
</html>
