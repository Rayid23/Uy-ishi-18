<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(9);

        return view('User.main', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('User.show', compact('post'));
    }
}
