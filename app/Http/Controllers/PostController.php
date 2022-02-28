<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {
        return view('blog',[
            "title" => "All Post",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
            "active" => "blog"
        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            "title" => "Blog",
            "post" => $post,
            "active" => "blog"
        ]);
    }
}