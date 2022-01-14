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
          {{Auth::user()->name}}さんの投稿一覧
        @endif
        
        <h1>Blog Name</h1>
        
        <div class="category">
            <h2>条件絞り込み</h2>
            <form action="/posts/search" method="POST">
                @csrf
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
                <input type="submit" value="検索"/>
            </form>
        </div>
        
        [<a href='/posts/create'>create</a>]
        <div class='posts'>
            @foreach ($posts as $post)
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