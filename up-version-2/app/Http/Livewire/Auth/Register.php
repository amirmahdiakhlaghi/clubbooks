<?php

namespace App\Http\Livewire\Auth;

use App\Mail\sendVerifactionCodeMail;
use App\Models\User;
use App\Rules\Auth\CheckField;
use App\Rules\Auth\MobileRule;
use App\Rules\Auth\PasswordConfirmedRule;
use App\Rules\Auth\UserNameRule;
use App\Rules\Auth\VerifyCodeRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Register extends Component
{
    public $data = [
        "field" => "",
        "username" => "",
        "password" => "",
        "password_confirmation" => "",
        "policy" => false
    ];

    public $sendedCode = false;
    public $user;
    public $verifycode;
    public function registerNewUser(){
        $filed = CheckField::setField($this->data['field']);
        $this->validate([
            'data.field' => ($filed == 'email') ? 'required | email | string| unique:users,email' : ['required' , new MobileRule],
            'data.username' => ['required ','string', 'unique:users,username'],
            'data.password' => 'required | min:6 | string | regex:/^[a-zA-Z0-9@$#^%*!]+$/u',
            'data.password_confirmation' => ['required' , new PasswordConfirmedRule($this->data['password'])]
        ]);


        $code = random_verification_code();

        $user = new User;
        $user->$filed = $this->data['field'];
        $user->password = Hash::make($this->data['password']);
        $user->username = $this->data['username'];
        $user->verified_code = $code;
        $user->save();
        $this->user = $user;
        Log::info('VERIFY-CODE-FOR-USER-'.$this->data['username'].'-WITH-CODE-'.$code);
        Mail::to($user)->send(new sendVerifactionCodeMail($user));
        $this->sendedCode = true;
        ////////////////////////

        //TODO:ارسال ایمیل یا پیامک به کاربر

    }
    public function registerVerify($userId){
        $this->validate([
            'verifycode' => ['required','max:6', new VerifyCodeRule($userId)]
        ]);
        $user = User::find($userId);
        $user->verified_at = now();
        $user->verified_code = null;
        $user->save();

        Auth::login($user);

        return redirect()->to('/');
    }

    public function updatedDataField(){
        $filed = CheckField::setField($this->data['field']);
        $this->validate([
            'data.field' => ($filed == 'email') ? 'required | email | string| unique:users,email' : ['required' , new MobileRule],
        ]);
    }
    public function updatedDataUsername(){
        $this->validate([
            'data.username' => ['required' , 'string' , new UserNameRule],
        ]);
    }
    public function updatedDataPassword(){
        $this->validate([
            'data.password' => 'required|min:6|string|regex:/^[a-zA-Z0-9@$#^%*!]+$/u'
        ]);
    }
    public function updatedDatapasswordconfirmation(){
        $this->validate([
            'data.password_confirmation' => ['required' ,'string' , new PasswordConfirmedRule($this->data['password'])],
        ]);
    }

    public function render()
    {
        if($this->sendedCode){
            return view('livewire.auth.register',['user' => $this->user]);
        }
        else{
            return view('livewire.auth.register');
        }
    }
}
