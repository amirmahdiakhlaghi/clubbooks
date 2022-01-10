<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\book;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $book;

    
    protected $rules = [
        
    ];

    public function mount(Book $book){
        $this->book = $book;
        
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Book') ]) ]);
        
        $this->book->update([
            'user_id' => auth()->id(),
        ]);
    }

    public function render()
    {
        return view('livewire.admin.book.update', [
            'book' => $this->book
        ])->layout('admin::layouts.app', ['title' => __('UpdateTitle', ['name' => __('Book') ])]);
    }
}
