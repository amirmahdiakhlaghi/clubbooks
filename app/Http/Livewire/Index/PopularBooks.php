<?php

namespace App\Http\Livewire\Index;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class PopularBooks extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $books = Book::where('id' , '!=' , 'null')->orderBy('likes' ,'desc')->paginate(12);
        return view('livewire.index.popular-books',['books' => $books]);
    }
}
