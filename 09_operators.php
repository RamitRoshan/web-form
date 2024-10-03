<?php
/*
1. Arithmetic operators  
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
*/

$a = 45;
$b = 8;

//1. Arithmetic operators  
echo "For a + b, the result is ". ($a + $b) . "<br>";
echo "For a - b, the result is ". ($a - $b) . "<br>";
echo "For a * b, the result is ". ($a * $b) . "<br>";
echo "For a / b, the result is ". ($a / $b) . "<br>";
//modulus operator is  used to find reminder 
echo "For a % b, the result is ". ($a % $b) . "<br>";
echo "For a ** b, the result is ". ($a ** $b) . "<br>";

//2. Assignment Operators
//it help to assign one value to another value 
// $x = $a;
// echo "For  x, the value is ". $x . "<br>";

// $a += 6;
// echo "For  a, the value is ". $a . "<br>";
// $a -= 6;
// echo "For  a, the value is ". $a . "<br>";
// $a *= 6;
// echo "For  a, the value is ". $a . "<br>";
// $a /= 6;
// echo "For  a, the value is ". $a . "<br>";

//3. Comparison Operators
$x = 7;
$y = 9;
//var_dump is used here so that we can know what is it returning true or false 
echo "For x == y, the result is ";
echo var_dump($x == $y);
echo "<br>";

//is is not equal to operator <>
echo "For x <> y, the result is ";
echo var_dump($x <> $y);
echo "<br>";


//4. Logical Operators

$m = true;
$n = false;

echo "For m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "For m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "For !m, the result is ";
echo var_dump(!$m);
echo "<br>";




?>