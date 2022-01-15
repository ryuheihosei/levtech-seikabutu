<?php

namespace App\Http\Controllers;

use App\Post;

use App\Http\Requests\PostRequest;

use App\Subject;

use App\Grade;

use App\User;

class PostController extends Controller
{
    public function index(Post $post,Grade $grade, Subject $subject)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()])->with(['grades' => $grade->get()])->with(['subjects' => $subject->get()]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create(Subject $subject,Grade $grade)
    {
        return view('posts/create')->with(['subjects'=>$subject->get()])->with(['grades'=>$grade->get()]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $input += ['user_id' => $request->user()->id];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $input += ['user_id' => $request->user()->id];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
    public function search(PostRequest $request, Post $post,Subject $subject,Grade $grade)
    {
        
        $grade_id = $request->input('grade_id');
        $subject_id = $request->input('subject_id');
        ddd($grade_id);
        $query = \App\Post::where('grade_id',$grade_id)->get();
        
        
        
        $res = \App\モデル名::whereHas('Grade', function($q) use ($grade_id){
            $q->where('', 値);
        })->get();
        
        return view('posts/index')->with(['posts' => $query->getPaginateByLimit()],['grades' => $grade->get()],['subjects' => $subject->get()]);

    }
    
    
}
