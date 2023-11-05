<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'slug' => 'required|unique:categories,slug',
            'name' => 'required|unique:categories,name'
        ]);
        Category::create(['slug' => $request->slug, 'name' => $request->name]);
        return redirect()->route('category.index');
    }
}
