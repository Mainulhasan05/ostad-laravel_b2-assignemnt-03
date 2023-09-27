<?php
// write code to generate a function that will take the length and generate random password The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+)
function generatePassword($length){
    $result="";
    $characters="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    for($i=0;$i<$length;$i++){
        $result.=$characters[rand(0,strlen($characters)-1)];
    }
    return $result;
}
echo generatePassword(12)."\n";