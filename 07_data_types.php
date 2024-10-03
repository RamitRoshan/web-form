<?php
//echo "HELLO";

$name = "JaisriRam";
$income = 200;

/* php data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

//String- sequence of characters
//there will be no diffrence here using "" or ''
$name = "Ramit";
$friend = "Aman";
echo "$name  friend is  a $friend";

//Integer - non decimal number 
$income = 455;
$debts = -655;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

//Float - Decimal point number
$income = 344.5;
$debts = -45.5;
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

//Boolean - true ir false
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
// var_dump= decide the incide value  and mostly use for string and what datatypes of it i.e boolean here
echo var_dump($is_friend);
echo "<br>";

// object - Instances of classes
//Employee is a class ---> Ramit can be one object


//Array - use dto store multiple value  in a single variable
$friends  = array("Ram", "Ramit", "Aman");
echo var_dump($friends);

//index of php starts from 0
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";

//Null
$name = NULL;
echo var_dump($name);

?>