<?php

namespace App\Rules\Auth;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class VerifyCodeRule implements Rule
{

    protected $userId;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $user = User::find($this->userId);
        if($user->verified_code == $value){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'کد وارد شده شما اشتباه است';
    }
}
