<?php

namespace App\Http\Livewire\Book;

use App\Models\Book as ModelsBook;
use Livewire\Component;

class Books extends Component
{
    public $books;

    public function render()
    {
        $book = ModelsBook::all();
        $this->$book = $book;
        return view('livewire.book.books');
    }
}
