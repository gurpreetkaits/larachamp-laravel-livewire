<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::query()->where('post_status','publish')
        ->orderBy('ID','desc')->paginate(10);
        $categories = (new Category())->getAll();
        return view('welcome',compact('posts','categories'));
    }

    public function show($name){

        $post = Post::query()->with('user')->where('post_name',$name)->first();
        
        return view('frontend.single-post',compact("post"));
    }
}
