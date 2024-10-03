<?php

echo "Welcome to the world of dates";
//for new line we sue  br tags
echo "<br>";

//to know more about syntax of date like : F, dS, Y - do visit php manual date website 
$d = date("dS F Y");
echo "Today date is $d <br>";

//printing something like: Thrusday 26th of Sepetember 2024 1:40 AM
echo date("l js \of F Y h:i:s A");

?>