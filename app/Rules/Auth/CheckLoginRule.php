<?php

namespace App\Rules\Auth;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class CheckLoginRule implements Rule
{
    protected $field;
    protected $valueField;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($field,$value)
    {
        $this->field = $field;
        $this->valueField = $value;

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
        $password = $value;
        if($user = User::where($this->field , $this->valueField)->first())
        {
            if(Hash::check($password,$user->password))
            {
                return true;
            }
            return false;

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
        return 'نام کاربری یا گذرواژه اشتباه است';
    }
}
