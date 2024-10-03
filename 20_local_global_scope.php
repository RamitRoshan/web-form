<?php
echo "Welcome to scope and local/global vars in php";
echo "<br>";
$a = 98;  //Global Variable
$b = 9;

function printValue(){
   // $a = 97;  //Local variable

    //give me the access of outer function i.e access of Global variable
    global $a, $b;
    $a = 100;
    $b = 1000;
    echo "The value of your variable  a is $a and b is $b <br>";
}

echo $a;
echo "<br>";
printValue();
echo "The value of your variable  a is $a and b is $b <br>";
echo "<br>";

echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);


?>