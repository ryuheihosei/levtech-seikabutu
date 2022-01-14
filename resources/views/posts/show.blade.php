@extends('layouts.app')

@section('content')<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        
        <form action="/posts/{{$post->id}}" id="form_delete" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deletePost(this);">delete</span>]</p>
        </form>
        
        <div><small>{{ $post->user->name }}</small></div>
        <a href="/subjects/{{ $post->subject->id }}">{{ $post->subject->name }}</a>       <a href="/grades/{{ $post->grade->id }}"> {{$post->grade->name}}</a>
        <div class="content">
            <h2 class="title">{{ $post->title }}</h2>
            
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">ホームに戻る</a>
        </div>
        
        <form action="/posts/{{$post->id}}/comments" method="POST" >
            @csrf
            
            <input name="comment[post_id]" type="hidden" value="{{ $post->id }}" >
            <div class="commentbody">
                <h2>コメント投稿</h2>
                <textarea name="comment[body]" placeholder="ここにコメントしてね"></textarea>
            </div>
            
            <input type="submit" value="コメント"/>
        
        </form>
        
        @forelse($post->comments as $comment)
            <div class="border-top p-4">
                <time class="text-secondary">
                    {{ $comment->created_at->format('Y.m.d H:i') }}
                </time>
                <p class="mt-2">
                    {!! nl2br(e($comment->body)) !!}
                </p>
            </div>
        @empty
            <p>コメントはまだありません。</p>
        @endforelse
        
        <script>
            function deletePost(e){
                'use strict';
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById('form_delete').submit();
                }
            }
        </script>
    </body>
</html>
@endsection