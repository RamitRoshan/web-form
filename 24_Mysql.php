<?php
echo "Welcome to the stage where we are ready to get connected to a database";
echo "<br>";

/*
Ways to connect to a MySQL Database
1. MySQLi extension (we can use this in a 2 ways , i.e Procedural oriented programming
 AND oBJECT ORIENTED). here we will use Procedural 

2. PDO(php data objects)
*/

//Connecting to the database(we need 3 variables)
$servername = "localhost";
$username = "root";
$password  = "";

//create a connection
$conn = mysqli_connect($servername, $username, $password);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}
else {
echo "Connection was successful";
}


?>