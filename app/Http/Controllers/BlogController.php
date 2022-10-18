<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(){
        $articles = Blog::latest()->paginate(9);
        return view("blog.index", [
            "articles" => $articles,
        ]);
    }

    public function create(){
        return view("blog.create");
    }

    public function store(Blog $blog, Request $request) {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->author = $request->author;
        $blog->image = $request->image;
        $blog->save();
        return redirect("/blog");
    }

    public function update(Blog $blog, Request $request, $id) {
        $blog->update($request->all());
        return redirect("/blog" + $id);
    }
}
