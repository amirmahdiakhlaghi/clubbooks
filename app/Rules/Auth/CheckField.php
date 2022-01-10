<?php

namespace App\Rules\Auth;

use Illuminate\Contracts\Validation\Rule;

class CheckField implements Rule
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

    }

    public static function setField($field)
    {
        if(str_contains($field,'@')){
            return 'email';
        }
        else{
            return 'phone';
        }
    }
    public static function setFieldLogin($field)
    {
        if(str_contains($field,'@') && ( str_contains($field,'.ir') || str_contains($field,'.com'))){
            return 'email';
        }
        else
        {
            return 'username';
        }
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
