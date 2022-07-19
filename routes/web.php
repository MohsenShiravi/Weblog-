<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
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

Route::get('/show/{post}', [IndexController::class, 'show'])->name('index.show');


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