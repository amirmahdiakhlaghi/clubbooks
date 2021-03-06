<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Index\Index;
use App\Http\Livewire\Article\Article;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Book\Book as Book;
use App\Http\Livewire\Book\Books;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', Index::class);
Route::get('/login' ,Login::class)->middleware('guest');
Route::get('/register' ,Register::class)->middleware('guest');
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});
Route::get('/book/{slug}' , Book::class);
Route::get('/article/{slug}' , Article::class);
Route::get('/books' , Books::class);
