<?php

echo "Welcome to associative arrays in php";
echo "<br>";

// These are called Indexed arrays
// $arr = array('this', 'that', 'what');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

// Associative arrays
//favourite color
$favCol = array( 'Sanu' => 'red', 'rohan' => 'green',
                    'Sinni' => 'brown', 8=> 'this' );
// echo $favCol['Sanu'];
// echo "<br>";
// echo $favCol['Sinni'];
// echo "<br>";
// echo $favCol[8];

foreach ($favCol as $key => $value) {
    # code...
    echo "<br>Favorite color of $key is $value";
}

?>