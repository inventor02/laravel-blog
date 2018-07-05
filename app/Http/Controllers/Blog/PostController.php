<?php

namespace Blog\Http\Controllers\Blog;

use Blog\Models\Blog\Post;
use Illuminate\Http\Request;
use Blog\Http\Controllers\Controller;

class PostController extends Controller
{
    function show(Post $post)
    {
        return view('blog.post');
    }
}
