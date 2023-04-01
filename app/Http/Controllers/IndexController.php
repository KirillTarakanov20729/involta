<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->orderBy("created_at", "DESC")->limit(3)->get();
        return view('welcome', [
            "blogs" => $blogs,
        ]);
    }

    public function info()
    {
        return view('info');
    }
}
