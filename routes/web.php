<?php

use App\Http\Livewire\AboutUs;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Index\Index;
use App\Http\Livewire\Article\Article;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Book\Book as Book;
use App\Http\Livewire\Book\Books;
use App\Http\Livewire\CallMe;
use App\Http\Livewire\Category\Category;
use App\Http\Livewire\Admin\Index\Index as AdminIndex;
use App\Http\Livewire\FavoriteBooks;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Search;
use App\Http\Livewire\ForeignBooks;
use App\Http\Livewire\Index\NewBooks;
use App\Http\Livewire\Index\PopularBooks;
use App\Http\Livewire\IraniBooks;
use App\Http\Livewire\Writer;
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
Route::get('/login', Login::class)->middleware('guest');
Route::get('/register', Register::class)->middleware('guest');
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::get('/book/{slug}', Book::class);
Route::get('/category/{slug}', Category::class);
Route::get('/article/{slug}', Article::class);
Route::get('/call-me', CallMe::class);
Route::get('/about-us', AboutUs::class);
Route::get('/books', Books::class);
Route::get('/profile/{changePassword?}', Profile::class);
Route::get('/mybook', FavoriteBooks::class);
Route::get('/search', Search::class);
Route::get('/foreign', ForeignBooks::class);
Route::get('/irani', IraniBooks::class);
Route::get('/new-books', NewBooks::class);
Route::get('/popular-books', PopularBooks::class);
Route::get('/writer/{name}', Writer::class);
// Route::get('/admin', AdminIndex::class);


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });