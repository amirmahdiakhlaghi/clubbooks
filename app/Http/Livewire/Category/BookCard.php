<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class BookCard extends Component
{
    public $book;
    public function mount($book){
        $this->book = $book;
    }

    public function render()
    {
        return view('livewire.category.book-card');
    }
}
