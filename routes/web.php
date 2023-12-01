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

Route::get('/dashboard', function () {
    return view('admin.home');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'admin'],function(){
        Route::resource('admin/post', PostController::class);
        Route::resource('category', CategoryController::class);
        Route::get("tag",TagComponent::class)->name('tag.index');
        Route::get("tag/create",TagCreateComponent::class)->name('tag.create');
        // Route::get("tag",TagComponent::class)->name('tag.index');
        Route::get('/admin/home', function () {
            return redirect('/dashboard');
        })->name('admin.home');
    });
});

Route::resource('about', AboutUs::class);

Route::controller(PostsController::class)->group(function () {
    Route::get('php', 'phpBlogs')->name('php.index');
    Route::get('dev-talks', 'devTalks')->name('php.index');
    Route::get('post/{name}', 'show')->name('post.show');
    Route::get('/{category?}', 'index')->name('blogs');
});



require __DIR__ . '/auth.php';
