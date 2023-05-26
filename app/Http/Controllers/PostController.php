<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "All Posts",
            "posts" => Post::with(['category', 'author'])->latest()->get()
        ]);
    }

    public function show(Post $post){
        // return $post;
        return view('post', [
            "title" => "Single post",
            "post" => $post 
        ]);
    }
}
