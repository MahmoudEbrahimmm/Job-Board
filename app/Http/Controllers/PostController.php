<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::cursorPaginate(2);
        return view('posts.index', compact('posts'));
    }
    function create(){
        // $post = Post::create([
        //    'title' => 'My First Post',
        //    'body'=> 'This is my commint',
        //    'author' => 'Mahmoud Ebrahim',
        //    'published' => true,
        // ]);
        Post::factory(100)->create();

        return redirect('/blog');
    }
}
