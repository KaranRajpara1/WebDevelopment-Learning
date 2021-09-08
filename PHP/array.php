<?php

// 3 types of array in PHP

// Numerical array
// Method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 30;
$a[3] = "Karan";

// Method 2 Dynaic array/ Blank array
$b[] = 10;
$b[] = 20;
$b[] = 30;
$b[] = "Karan";
// it will automatically identify the index

// Method 3= always consider this method to create array
$c = array(10,20,30,"Karan",40.50);

// print array
echo "My name is ".$c[3];

for ($i=0; $i < count($a); $i++) { 
    echo "<br>$a[$i]";
}

// inbuilt functions
echo "<pre>"; // predefined tag
// inbuilt array to debug the array
print_r($a);
var_dump($a);
var_export($a);


// associative array

// method 1
// key value
$a[0] = 10;
$a['c'] = "Computer";

// method 2
// always use this method to create associative array
$a = array(
    0 => 10,
    "C" => "Comper",
    10 => "Sachin" 
);
// we can not use for loop because index is differnt
echo"<br>";
foreach ($a as $key => $value) {
    # code...
    echo "<br>$key = $value";
}
// inbuilt functions
echo "<pre>"; // predefined tag
// inbuilt array to debug the array
print_r($a);
var_dump($a);
var_export($a);
?>