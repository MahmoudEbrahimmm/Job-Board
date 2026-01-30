<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function welcome(){
        return view("welcome");
    }
    public function about(){
        return view("job.about");
    }
    public function contact(){
        return view("job.contact");
    }
}
