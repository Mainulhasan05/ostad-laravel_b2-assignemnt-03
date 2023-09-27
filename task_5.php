<?php
function generatePassword($length){
    $result="";
    $capital="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $small="abcdefghijklmnopqrstuvwxyz";
    $number="0123456789";
    $special="!@#$%^&*()_-=+;:,.?";

    $result.=$capital[rand(0,strlen($capital)-1)];
    $result.=$small[rand(0,strlen($small)-1)];
    $result.=$number[rand(0,strlen($number)-1)];
    $result.=$special[rand(0,strlen($special)-1)];
    for($i=0;$i<$length-4;$i++){
        $result.=$capital[rand(0,strlen($capital)-1)];
    }
    // return $result;
    return str_shuffle($result);
}
echo generatePassword(12)."\n";