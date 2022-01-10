<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Header extends Component
{
    public $categories;
    // public function logout($userId){
    //     Auth::logout($userId);
    // }
    public function mount(){
        $categories = Category::all();
        $this->categories = $categories;
    }
    public function render()
    {
        $categories = $this->categories;
        return view('livewire.header',['categories' => $categories]);
    }
}
