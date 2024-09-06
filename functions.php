<?php

function randomPassword($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!#$%&()*+,-.:;=@[]^_{}";
    $charsArray = str_split($chars);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $charsArray[mt_rand(0, count($charsArray) - 1)];
    }
    return $password;
}
