<?php

namespace App\Http\Controllers;

use App\Comment;

use Illuminate\Http\Request;

use App\Post;

class CommentsController extends Controller
{
    public function store(Request $request,Comment $comment)
    {
        $input = $request['comment'];
        $comment->fill($input)->save();
        
        return redirect('/posts/' . $comment->post_id);
    }
}