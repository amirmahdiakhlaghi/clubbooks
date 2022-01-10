<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CallMe extends Component
{
    public $name = "";
    public $email = "";
    public $subject = "";
    public $text = "";

    public function mount(){
    }

    public function send(){
        $this->validate([
            'name' => 'required|string|max:25',
            'email' => 'required|string|max:25|email',
            'subject' => 'required|string|max:25',
            'text' => 'required|string|max:75'
        ]);

        dd($this->name, $this->email,$this->subject,$this->text);
    }

    public function render()
    {
        return view('livewire.call-me');
    }
}
