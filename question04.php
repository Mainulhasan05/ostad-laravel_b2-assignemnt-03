<?php
$studentGrades=[
    "student1"=>[85, 92, 78],
    "student2"=>[95, 88, 92],
    "student3"=>[95, 92, 92]
];

function calculateAverage($studentGrades){
    $result=[];
    foreach($studentGrades as $student=>$grades){
        $result[$student]=array_sum($grades)/count($grades);
    }
    return $result;
}

function convertAverageMarksIntoGrades($studentGrades){
    $result=[];
    foreach($studentGrades as $student=>$grades){
        $average=array_sum($grades)/count($grades);
        if($average>=90){
            $result[$student]="A";
        }elseif($average>=80){
            $result[$student]="B";
        }elseif($average>=70){
            $result[$student]="C";
        }elseif($average>=60){
            $result[$student]="D";
        }else{
            $result[$student]="F";
        }
    }
    return $result;
}

print_r(calculateAverage($studentGrades));
print_r(convertAverageMarksIntoGrades($studentGrades));
