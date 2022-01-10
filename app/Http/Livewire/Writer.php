<?php

namespace App\Http\Livewire;

use App\Models\Writer as ModelsWriter;
use Livewire\Component;

class Writer extends Component
{
    public $name;
    public $writer;
    public $books;
    public function render()
    {
        $writer = $this->writer;
        return view('livewire.writer', ['witer' => $writer]);
    }

    public function mount($name)
    {
        $this->name = $name;
        $writer = ModelsWriter::where('name', $this->name)->get()->first();
        $this->writer = $writer;
        $this->books = $writer->books()->get();
    }
}