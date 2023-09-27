<?php 

// Task 5: Password Generator

// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.


function password_generate($chars){

    $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';
    $_alphaCaps  = strtoupper($_alphaSmall);
    $_numerics   = '1234567890';
    $_specialChars = '!@#$%^&*()_+';

    $data = $_alphaSmall . $_alphaCaps . $_numerics . $_specialChars;
    return substr(str_shuffle($data), 0, $chars);
}

echo password_generate(12) . "\n";
