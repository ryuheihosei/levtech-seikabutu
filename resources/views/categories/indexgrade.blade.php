@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @if(Auth::user())
          <a href="/user">{{Auth::user()->name}}さんの投稿</a>
        @endif
        <h1>Blog Name</h1>
        
        <div class="category">
            <h2>条件絞り込み</h2>
            <form action="/posts/" method="POST">
                <select name="grade_id">
                    @foreach($grades as $grade)
                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                    @endforeach
                </select>
                
                <select name="subject_id">
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
                <input type="submit" value="絞り込み"/>
            </form>
        </div>
        
        [<a href='/posts/create'>create</a>]  [<a href="/">ホームに戻る</a>]
        <div class='posts'>
            @foreach ($posts as $post)
                <div><small>{{ $post->user->name }}</small></div>
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
                
                @if ($post->comments->count())
                    <span class="badge badge-primary">
                        コメント {{ $post->comments->count() }}件
                    </span>
                @endif
                
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
@endsection