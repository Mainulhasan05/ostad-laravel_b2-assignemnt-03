<?php
$text="The quick brown fox jumps over the lazy dog.";

function convertString($text){
    $text = strtolower($text);
    $text = str_replace('brown', 'red', $text);
    
    return $text;
}

echo convertString($text)."\n";