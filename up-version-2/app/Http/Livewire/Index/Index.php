<?php

namespace App\Http\Livewire\Index;

use App\Models\Article;
use App\Models\Book;
use Livewire\Component;

class Index extends Component
{
    public $newArticles;
    public $bestArticles;
    public $allBooks;
    public $newBooks;


    public function mount(){
        $this->allBooks = Book::all();
        $this->newBooks = Book::orderby('id','ASC')->take(4)->get();
        // $this->newArticles = Article::orderby('id' , 'DESC')->take(4)->get();
        // $this->bestArticles = Article::where('is_best', 1)->take(4)->get();
    }

    public function render()
    {
        return view('livewire.index.index');
    }
}
