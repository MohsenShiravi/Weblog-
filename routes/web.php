<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RoleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/index', [IndexController::class, 'index'])->name('index');
Route::get('/show/{post}', [IndexController::class, 'show'])->name('show');
Route::get('/search/',[IndexController::class,'search'])->name('search');
Route::post('/store',[IndexController::class,'store'])->name('comments.store');

Route::prefix('categories')->middleware(['auth'])->group(function (){
    Route::get('/',[CategoryController::class,'index'])->name('categories.index');
    Route::get('/create',[CategoryController::class,'create'])->name('categories.create');
    Route::post('/store',[CategoryController::class,'store'])->name('categories.store');
    Route::get('/edit/{category}',[CategoryController::class,'edit'])->name('categories.edit');
    Route::post('/update/{category}',[CategoryController::class,'update'])->name('categories.update');
    Route::get('/destroy/{category}',[CategoryController::class,'destroy'])->name('categories.destroy');
});

Route::prefix('posts')->middleware(['auth'])->group(function (){
    Route::get('/',[PostController::class,'index'])->name('posts.index');
    Route::get('/create',[PostController::class,'create'])->name('posts.create');
    Route::post('/store',[PostController::class,'store'])->name('posts.store');
    Route::get('/edit/{post}',[PostController::class,'edit'])->name('posts.edit');
    Route::post('/update/{post}',[PostController::class,'update'])->name('posts.update');
    Route::get('/destroy/{post}',[PostController::class,'destroy'])->name('posts.destroy');

});

Route::prefix('images')->middleware(['auth'])->group(function (){
    Route::get('/',[ImageController::class,'index'])->name('images.index');
    Route::get('/create',[ImageController::class,'create'])->name('images.create');
    Route::post('/store',[ImageController::class,'store'])->name('images.store');
    Route::get('/edit/{image}',[ImageController::class,'edit'])->name('images.edit');
    Route::post('/update/{image}',[ImageController::class,'update'])->name('images.update');
    Route::get('/destroy/{image}',[ImageController::class,'destroy'])->name('images.destroy');
});

Route::prefix('roles')->group(function (){
    Route::get('/',[RoleController::class,'index'])->name('roles.index');
    Route::get('/create',[RoleController::class,'create'])->name('roles.create');
    Route::post('/store',[RoleController::class,'store'])->name('roles.store');
    Route::get('/edit/{role}',[RoleController::class,'edit'])->name('roles.edit');
    Route::post('/update/{role}',[RoleController::class,'update'])->name('roles.update');
    Route::get('/destroy/{role}',[RoleController::class,'destroy'])->name('roles.destroy');
});
Route::prefix('users')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('users.index');
    Route::post('/store/{user}',[UserController::class,'store'])->name('users.store');
    Route::get('/show/{user}',[UserController::class,'show'])->name('users.show');
});
Route::prefix('comments')->group(function (){
    Route::get('index',[CommentController::class,'index'])->name('comments.index');
    Route::get('/edit/{comment}',[CommentController::class,'edit'])->name('comments.edit');
    Route::post('/update/{comment}',[CommentController::class,'update'])->name('comments.update');
    Route::get('/destroy/{comment}',[CommentController::class,'destroy'])->name('comments.destroy');
});
Route::get('tags/show',[TagController::class, 'show'])->name('tags.show');
Route::get('/profile',[ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit',[ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/update',[ProfileController::class,'update'])->name('profile.update');
