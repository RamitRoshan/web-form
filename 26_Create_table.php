<?php

//Connecting to the database(we need 3 variables)
$servername = "localhost";
$username = "root";
$password  = "";
$database = "dbharry";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}
else {
echo "Connection was successful <br>";
}

//Var_dump is use dto know true or false


// create a table in the db
$sql = "CREATE TABLE `phptrip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `Dest` VARCHAR(6) NOT NULL ,
 PRIMARY KEY (`sno`));";

 
 $result = mysqli_query($conn, $sql);


//check for the table creation success
if($result){
    echo "The table was  created  successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
 


?>