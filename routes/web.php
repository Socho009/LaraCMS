<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\LinkController;
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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/posts',[PostController::class,'index'])->name('post.list');

Route::group(['middleware'=>['auth'],'prefix'=>'user'],function(){
    Route::get('/posts',[PostController::class,'index'])->name('post.list');
    Route::get('/post/add',[PostController::class,'add'])->name('post.add');
    Route::post('/post/save',[PostController::class,'store'])->name('post.store');
    Route::get('/post/view/{post}',[PostController::class,'view'])->name('post.view');
    Route::put('/post/update',[PostController::class,'update'])->name('post.update');
    Route::delete('/post/delete/{post}',[PostController::class,'delete'])->name('post.delete');

    Route::get('/links',[LinkController::class,'index'])->name('link.list');
    Route::get('/link/add',[LinkController::class,'add'])->name('link.add');
    Route::post('/link/save',[LinkController::class,'store'])->name('link.store');
    Route::get('/link/view/{link}',[LinkController::class,'view'])->name('link.view');
    Route::put('/link/update',[LinkController::class,'update'])->name('link.update');
    Route::delete('/link/delete/{link}',[LinkController::class,'delete'])->name('link.delete');
});








Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
