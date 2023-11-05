<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.post.index',compact('posts'));
    }

    public function destroy($id){
        $posts = Post::query()->where('id',$id)->delete();
        return back()->with('success','Post Has been deleted');
    }
    public function create(){
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.create',compact('tags','categories'));
    }
}
