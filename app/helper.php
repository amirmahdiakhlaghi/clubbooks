<?php

if (!function_exists('random_verification_code')) {
    /**
     * create a random verification code for verifying useres
     * @param string $mobile mobileNumber
     * @return string
     */
    function random_verification_code($num = null)
    {
        if ($num == null) {
            $code = random_int(100000,999999);
        }
        else{
            $numZeros = '';
            for ($i=1; $i <$num ; $i++) {
                $numZeros .= '0';
            }

            $code = random_int(intval('1' . $numZeros) , intval('9' . $numZeros));

        }
        return $code;
    }
}
