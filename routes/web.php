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

Route::resource('about', AboutUs::class);

Route::controller(PostsController::class)->group(function () {
    Route::get('post/{name}', 'show')->name('post.show');
    Route::get('/{category?}', 'index')->name('blogs');
});

require __DIR__ . '/auth.php';
