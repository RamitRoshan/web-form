<?php
 
$name = "Ramit is a hustler";
echo $name;
// for new/next line use br tags
echo "<br>";

//To find length in String we use strlen
//to add/join two string we use dot(.) operator here 
echo "The length of my string is " . strlen($name);
echo "<br>";

//we use str_word_count to count how many words is present here
echo str_word_count($name);
echo "<br>";

//to reverse string we use strrev
echo strrev($name);
echo "<br>";

//to search anything is string we use strpos
echo strpos($name, "is");
echo "<br>";

//used to replace in string str_replace
echo str_replace("Ramit", "Sanu", $name);
echo "<br>";

//to repeat any string we use str_repeat
//here it  will repeat 100 times 
echo str_repeat($name, 10);
echo "<br>";


echo "<pre>";
echo rtrim(" this is a good boy ");  // Trims right (trailing spaces)
echo "<br>";

echo ltrim("  this is a good boy  ");  // Trims left (leading spaces)
echo "</pre>";


?>