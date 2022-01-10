<?php

namespace App\Rules\Auth;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class CheckUserNameRule implements Rule
{

    protected $field;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($field)
    {
        $this->field = $field;
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
        if($this->field == 'email'){
            $email = $value;
            if(User::where('email' , $email)->get()->first())
            {
                return true;
            }
            return false;
        }
        elseif($this->field == 'username'){
            $username = $value;
            if(User::where('username' , $username)->get()->first())
            {
                return true;
            }
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
        return 'کاربری با این مشخصات یافت نشد';
    }
}
