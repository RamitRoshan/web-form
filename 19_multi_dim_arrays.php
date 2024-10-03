<?php
echo "Welcome to multi dimensional arrays in php <br>";

// multi dimentional array/ 2-d array= arrays k ander ek arrays
$multiDim = array(
      array(2,5,7,8),
      array(1,2,3,1),
      array(4,5,0,1)
);

//echo var_dump($multiDim);

//printing the contents of a 2 dimentional array
// for($i=0; $i< count($multiDim); $i++) {
//     echo var_dump($multiDim);
//     echo "<br>";
// }


for ($i=0; $i <count($multiDim); $i++) {

    for ($j=0; $j <count($multiDim[$i]) ; $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}



?> 