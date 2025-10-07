<?php

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }

    return $sum;

}

$rohan = [23, 24, 47,80, 78] ;
$sumMarks = processMarks($rohan);

$samira = [99, 90, 97, 99,100] ;
$sumMarksSamira = processMarks($samira);

echo "Total marks scored by rohan out of 500 is $sumMarks<br>" ;
echo "Total marks scored by Samira out of 500 is $sumMarksSamira<br>" ;

?>