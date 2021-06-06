<?php

namespace App\Http\Controllers;

// use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $blogs = Blog::all();
        // return view('home.index', compact('blogs'));

        return view('home.index');
    }

    public function work()
    {
        return view('work.index');
    }
}
