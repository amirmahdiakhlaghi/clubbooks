<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class CheckPasswordRule implements Rule
{

    protected $password;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = auth()->user();
        $this->password = $user->password;
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
        if(Hash::check($value , $this->password)){
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
        return 'پسورد ورودی شما اشتباست';
    }
}
