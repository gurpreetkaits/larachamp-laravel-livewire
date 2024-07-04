<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Livewire\AboutUs;
use App\Livewire\Admin\TagComponent;
use App\Livewire\Admin\TagCreateComponent;
use App\Livewire\Blogs;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function (){
    return to_route('about');
});
Route::get('about', AboutUs::class)->name('about');
Route::get('articles', \App\Livewire\Article::class)->name('article.index');

require __DIR__ . '/auth.php';
