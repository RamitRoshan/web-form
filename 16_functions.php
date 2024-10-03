<?php

echo "welcome to php tutorial on functions";
echo "<br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as  $value) {
        $sum += $value;
    }
    return $sum;
}


function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as  $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}


$rohanDas = [34, 98, 45, 12, 98, 93];
//$sumMarks = processMarks($rohanDas);
$sumMarks = avgMarks($rohanDas);
echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";

$Ramit = [99, 96, 98, 92, 19, 98];
//$sumMarksRamit = processMarks($Ramit);
$sumMarksRamit = avgMarks($Ramit);

echo "Total marks scored by ramit out of 600 is $sumMarksRamit";


?>