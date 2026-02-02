<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::cursorPaginate(3);
        return view('tags.index', compact('tags'));
    }
    function create(){
        $tags = Tag::create([
           'title' => 'Test',
        ]);
        return redirect('/tags');
    }
}
