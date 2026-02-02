<?php

namespace App\Http\Controllers;

use App\Models\Commit;

class CommitController extends Controller
{
    public function index()
    {
        $commits = Commit::all();
        return view('commits.index', compact('commits'));
    }
    function create(){
        $commits = Commit::create([
           'content'=> 'This is my commint',
           'author' => 'Osama Gamal',
           'post_id' => 1,
        ]);
        return redirect('/commit');
    }
}
