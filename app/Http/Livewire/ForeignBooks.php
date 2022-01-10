<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Book\Book as BookBook;
use App\Models\Book;
use App\Models\Category;
use Livewire\Component;

class ForeignBooks extends Component
{
    public $categories;

    public function mount(){
        $categories = Category::where('region','other')->get();
        $this->categories = $categories;

    }

    public function render()
    {
        return view('livewire.foreign-books');
    }
}
