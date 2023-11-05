<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
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

    // Route::controller(PostController::class)->group(function(){
    //     Route::resource('user', UserController::class);('/')
    // })->prefix('admin');
    // Route::get('/dashboard')->name('admin.home');
    Route::resource('admin/post', PostController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);

    Route::get('/admin/home',function(){
        return redirect('/dashboard');
    })->name('admin.home');
});

Route::controller(PostsController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('post/{name}', 'show')->name('post.show');
});



require __DIR__ . '/auth.php';
