<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    public $category;

    public function mount($slug){
        $this->category = CategoryModel::where('slug' , $slug)->get()->first();
    }

    public function render()
    {
        return view('livewire.category.category');
    }
}
