<?php
echo "Welcome to the world of foreach loops <br>";

$arr = array("Bananas", "Apples", "Harpic", "Bread", "butter");


//printing this array using for loop
// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }


//better way to print this array , now we use foreach loop  
foreach ($arr as  $value) {
    echo "$value <br>";
}
?>












