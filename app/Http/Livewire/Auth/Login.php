<?php

namespace App\Http\Livewire\Auth;

use App\Rules\Auth\CheckField;
use App\Rules\Auth\CheckLoginRule;
use App\Rules\Auth\CheckUserNameRule;
use Dotenv\Exception\ValidationException;
use Error;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $data = [
        "field" => "",
        "password" => "",
        "remember" =>false
    ];

    public function login(){
        $filed = CheckField::setFieldLogin($this->data['field']);
        $this->validate([
            'data.field' => ($filed == 'email') ? ['required','email','string',new CheckUserNameRule($filed)] : ['required' , new CheckUserNameRule($filed)],
            'data.password' => ['required' , 'string' , 'regex:/^[a-zA-Z0-9@$#^%*!]+$/u', new CheckLoginRule($filed ,$this->data['field'])]
        ]);

        if(Auth::attempt([$filed => $this->data['field'] , 'password' => $this->data['password']],$this->data['remember']))
        {
            return redirect()->to('/');
        }
        else{
            // throw new ModelNotFoundException('کاربری با اطلاعات مورد نظر پیدا نشد');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
