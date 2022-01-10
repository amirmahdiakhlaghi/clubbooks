<?php

namespace App\Http\Livewire\Index;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class NewBooks extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $books = Book::where('id' , '!=' , 'null')->orderBy('created_at' ,'desc')->paginate(12);
        return view('livewire.index.new-books',['books' => $books]);
    }
}
