<?php
$numbers=[1,2,3,4,5,6,7,8,9,10];
function removeEvens($numbers){
    $result=[];
    foreach($numbers as $number){
        if($number%2!=0){
            $result[]=$number;
        }
    }
    return $result;
}
print_r(removeEvens($numbers));