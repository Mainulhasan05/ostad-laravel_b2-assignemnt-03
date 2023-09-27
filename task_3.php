<?php
$grades=[85, 92, 78, 88, 95];

function sortDecending($grades){
    rsort($grades);
    return $grades;
}
print_r(sortDecending($grades));