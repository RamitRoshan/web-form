<?php

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
echo "Connection was successful <br>";
}

//Var_dump is use dto know true or false

//Create a db
$sql = "CREATE DATABASE dbHarry";
$result = mysqli_query($conn, $sql);


// Check for the database creating success
if($result){
    echo "The db was  created  successfully!<br>";
}
else{
    echo "The db was not created successfully because of this error ---> ". mysqli_error($conn);
}


// echo "The result is ";
// echo var_dump($result);
// echo "<br>";
//service desk mngt 

 


?>