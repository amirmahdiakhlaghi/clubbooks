<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class IraniBooks extends Component
{
    public $categories;

    public function mount(){
        $categories = Category::where('region','irani')->get();
        $this->categories = $categories;
    }

    public function render()
    {
        return view('livewire.irani-books');
    }
}
