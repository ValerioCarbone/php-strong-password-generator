<?php
function pw_generator($pw_length)
{
    $pw_source = '0123456789abcdefghijklmnopqrstuvzywxABCDEFGHIJKLMNOPQRSTUVZYWX@#-_!$%&/()=?^';
    $password = '';
    for ($i = 0; $i < $pw_length; $i++) {

        $current_char = random_int('0', strlen($pw_source) - 1);

        $password .= $pw_source[$current_char];
    }
    return $password;
}
