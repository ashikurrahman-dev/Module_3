<?php

// Task 5: Password Generator

// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.


function generatePassword($length){
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $password = $uppercaseChars[mt_rand(0, strlen($uppercaseChars) - 1)];
    $password .= $lowercaseChars[mt_rand(0, strlen($lowercaseChars) - 1)];
    $password .= $numberChars[mt_rand(0, strlen($numberChars) - 1)];
    $password .= $specialChars[mt_rand(0, strlen($specialChars) - 1)];

    $remainingLength = $length - 4;
    $allChars = $uppercaseChars . $lowercaseChars . $numberChars . $specialChars;

    for ($i = 0; $i < $remainingLength; $i++) {
        $password .= $allChars[mt_rand(0, strlen($allChars) - 1)];
    }

    $password = str_shuffle($password);

    return $password;
}

$generatedPassword = generatePassword(12);

echo "Generated Password: " . $generatedPassword;
