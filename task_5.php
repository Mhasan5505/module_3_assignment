<?php
function generatePassword($length) {
    $chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+';
    $password='';
    $charCount=strlen($chars);

    for($i = 0; $i < $length; $i++) {
        $randomIndex=mt_rand(0, $charCount-1);
        $password .=$chars[$randomIndex];
    }
    return $password;
}

$password = generatePassword(12);
echo $password;


?>