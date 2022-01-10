<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category as ModelsCategory;
use Livewire\Component;

class Category extends Component
{
    public $categories;
    public function mount(){
        $categories = ModelsCategory::all();
    }

    public function render()
    {
        $categories = $this->categories;
        return view('livewire.admin.category.category' , ['categories' , $categories]);
    }
}
