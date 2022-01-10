<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserInfo;
use App\Rules\Auth\MobileRule;
use App\Rules\Auth\PasswordConfirmedRule;
use App\Rules\CheckPasswordRule;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Profile extends Component
{
    public $userId;
    public $switchedToEdit = false;
    public $switchedToChangePassword = false;
    public $dataName = '';
    public $dataLastname = '';
    public $dataUsername = '';
    public $dataPhone = '';
    public $dataBio = '';

    public $oldPassword;
    public $newPassword;
    public $newPasswordConfrim;

    // public $data = [
    //     'name' => '',
    //     'lastname' => '',
    //     'username' => '',
    //     'phone' => '',
    //     'bio' => ''
    // ];

    public function switchToEdit(){
        $this->switchedToEdit = true;
    }

    public function switchToShow(){
        $user = auth()->user();
        $this->dataName = $user->userInfo->name;
        $this->dataLastname = $user->userInfo->lastname;
        $this->dataUsername = $user->username;
        $this->dataPhone = $user->phone;
        $this->dataBio = $user->userInfo->bio;
        $this->switchedToEdit = false;
    }

    public function changePassword(){
        $this->validate([
            'oldPassword' => ['required','string' , new CheckPasswordRule],
            'newPassword' => 'required | string | max:20 | regex:/^[a-zA-Z0-9@$#^%*!]+$/u',
            'newPasswordConfrim' => ['required ','string', new PasswordConfirmedRule($this->newPassword)],
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = Hash::make($this->newPassword);
        $user->save();
        $this->oldPassword = '';
        $this->newPassword = '';
        $this->newPasswordConfrim = '';
        $this->switchedToChangePassword = false;
        $this->emit('showAlertAddComment' , "پسورد شما با موفقیت تغییر یافت");
    }

    public function editInfo(){

        $user = User::find(auth()->user()->id);
        $userInfo = UserInfo::where('user_id' , $this->userId)->first();

        $this->validate([
            'dataName' => 'required|string | max:20',
            'dataLastname' => 'string | max:20',
            'dataUsername' => ['required ','string', 'regex:/^[a-zA-Z0-9@$&*]+$/u'],
            'dataBio' => 'string | max:100',
            'dataPhone' => ['string','max:17', new MobileRule],
        ]);

        $user->username = $this->dataUsername;
        $user->phone = $this->dataPhone;
        $userInfo->name = $this->dataName;
        $userInfo->lastname = $this->dataLastname;
        $userInfo->bio = $this->dataBio;
        $user->save();
        $userInfo->save();

        $this->switchedToEdit = false;

        $this->emit('showAlertAddComment' , "مشخصات شما با موفقیت ویرایش شد");

    }

    public function mount($changePassword = null){
        if(!auth()->check()){
            redirect()->to('/');
        }
        else{
            $user = auth()->user();
            $this->userId = $user->id;
            $this->dataName = $user->userInfo->name;
            $this->dataLastname = $user->userInfo->lastname;
            $this->dataUsername = $user->username;
            $this->dataPhone = $user->phone;
            $this->dataBio = $user->userInfo->bio;
            if($changePassword == 'changePassword'){
                $this->switchedToChangePassword = true;
            }
        }
    }

    public function render()
    {
        if(!auth()->check()){
            redirect()->to('/');
        }

        $user = User::find($this->userId);
        // if($this->switchedToEdit == true){
        //     $this->dataName = $user->userInfo->name;
        //     $this->dataLastname = $user->userInfo->lastname;
        //     $this->dataUsername = $user->username;
        //     $this->dataPhone = $user->phone;
        //     $this->dataBio = $user->userInfo->bio;
        // }
        // $this->data['name'] = $user->userInfo->name;
        // $this->data['lastname'] = $user->userInfo->lastname;
        // $this->data['username'] = $user->username;
        // $this->data['phone'] = $user->phone;
        // $this->data['bio'] = $user->userInfo->bio;

        return view('livewire.profile' , ['user' => $user]);
    }
}
