<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\user;
use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $models;
    protected $rules = [

    ];

    public function fields()
    {
        return ['username', 'email', 'password'];
    }

    public function inputs()
    {
        return [
            'username' => 'username',
            'email' => 'email',
            'password' => 'password',
        ];
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function create()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('CreatedMessage', ['name' => __('User') ])]);

        User::create([
            'user_id' => auth()->id(),
        ]);

        $this->reset();
    }

    public function mount(){
        $this->models = User::all();
    }

    public function render()
    {
        return view('livewire.admin.user.create')
            ->layout('admin::layouts.app', ['title' => __('CreateTitle', ['name' => __('User') ])]);
    }
}
