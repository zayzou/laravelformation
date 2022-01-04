<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('post', function () {
    return response()->json([
        'title' => "Post title",
        'content' => "lorem"
    ]);
});

Route::get('articles', function () {
    return view('articles');
});*/

Route::get('/',[PostController::class,'index'])->name('welcome');
Route::get('/post/{id}',[PostController::class,'show'])->whereNumber('id')->name("posts.show");
Route::get('/tag/{id}',[PostController::class,'showTag'])->whereNumber('id')->name("tags.show");
Route::get('post/create',[PostController::class,'create'])->whereNumber('id')->name("posts.create");
Route::post('post/create',[PostController::class,'store'])->whereNumber('id')->name("posts.store");
Route::get('/contact',[PostController::class,'contact'])->name('contact');
