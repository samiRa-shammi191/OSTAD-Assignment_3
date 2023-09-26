<?php
function generatePassword($length) {

    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    
    $randomPass = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;
    
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($randomPass) - 1);
        $password .= $randomPass[$randomIndex];
    }
    
    return $password;
}

$password = generatePassword(12);

echo "Generated Password: $password\n";
?>
