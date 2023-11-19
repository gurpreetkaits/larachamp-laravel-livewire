<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()->with('category')->where('status', 'published')
            ->orderBy('id', 'desc');
        $categories = (new Category())->getAll();
        $tags = (new Tag())->getAll();
        if(request()->ajax()){
            $posts = $posts->where('title','like',"%$request->search%")->simplePaginate(10);
            return view('frontend.content',compact('posts','categories','tags'));
        }
        $posts = $posts->simplePaginate(10);
        return view('welcome', compact('posts', 'categories', 'tags'));
    }

    public function show($name)
    {
        $post = Post::query()->with('user')->where('url', $name)->first();
        return view('frontend.single-post', compact("post"));
    }
}
