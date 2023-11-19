<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function destroy($id)
    {
        $posts = Post::query()->where('id', $id)->delete();
        return back()->with('success', 'Post Has been deleted');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'slug' => 'unique:blogs,url'
        ]);
        $data = [
            'content' => request('content'),
            'title' => request('title'),
            'category_id' => request('category_id'),
            'url' => request('slug'),
            'user_id' => Auth::user()->id,
            'tags' => json_encode(request('tags'))
        ];
        try {
            Post::query()->create($data);
            return back()->with('success','Post has been created');
            
        } catch (\Throwable $th) {
            
            return back()->withInput(['content','title','slug','category_id']);
        }
    }
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.post.create', compact('tags', 'categories'));
    }
}
