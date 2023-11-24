<?php
function pw_generator($pw_length)
{
    $pw_source = '0123456789abcdefghijklmnopqrstuvzywxABCDEFGHIJKLMNOPQRSTUVZYWX@#-_!$%&/()=?^';
    $password = '';
    $max_char = strlen($pw_source) - 1;
    for ($i = 0; $i < $pw_length; $i++) {

        $current_char = random_int('0', $max_char);

        $password .= $pw_source[$current_char];
    }
    return $password;
}
