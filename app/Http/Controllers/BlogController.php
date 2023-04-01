<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()->orderBy("created_at", "DESC")->paginate(3);
        return view('blogs.index', [
            "blogs" => $blogs,
        ]);
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blogs.show', [
            "blog"=> $blog
        ]);

    }

    public function comment($id, CommentForm $request)
    {
        $blog = Blog::findOrFail($id);

        $blog->comments()->create($request->validated());

        return redirect(route("blogs.show", $id));
    }
}
