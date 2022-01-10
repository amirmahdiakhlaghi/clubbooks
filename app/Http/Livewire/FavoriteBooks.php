<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class FavoriteBooks extends Component
{
    public $userId;
    public $books;

    public function mount(){
        if(!auth()->check()){
            redirect()->to('/');
        }
        else{
            $this->userId = auth()->user()->id;
        }
    }

    public function render()
    {
        $user = User::find($this->userId);
        $books = $user->bookFavorites()->get();
        $this->books = $books;

        return view('livewire.favorite-books' , ['books' => $books]);
    }
}
