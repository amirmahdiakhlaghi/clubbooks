<?php

namespace App\Rules\Auth;

use Illuminate\Contracts\Validation\Rule;

class UserNameRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        $usernameRegex = '/^[a-zA-Z0-9@$&*]+$/u';
        preg_match($usernameRegex, $value, $matches);
        if(empty($matches)){
            return false;
        }
        else{
            return true;
        }
    }


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'نام کابری وارد شده مورد قبول نمیباشد';
    }
}
