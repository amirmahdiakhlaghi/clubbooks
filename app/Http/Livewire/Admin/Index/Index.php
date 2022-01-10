<?php

namespace App\Http\Livewire\Admin\Index;

use Livewire\Component;

class Index extends Component
{
    public $indexCall = true;
    public $postsCall = false;
    public $usersCall = false;
    public $categoriesCall = false;

    public function showCategories(){
        $this->indexCall = false;
        $this->postsCall = false;
        $this->usersCall = false;
        $this->categoriesCall = true;
    }

    public function showposts(){

    }

    public function showusers(){

    }

    public function render()
    {
        $indexCall = $this->indexCall;
        $postsCall = $this->postsCall;
        $usersCall = $this->usersCall;
        $categoriesCall = $this->categoriesCall;
        return view('livewire.admin.index.index' ,['categoriesCall' => $categoriesCall, 'usersCall' => $usersCall , 'indexCall' => $indexCall , 'postsCall' => $postsCall]);
    }


}
