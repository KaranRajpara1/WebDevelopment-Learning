<?php

// isset() is used to check variable is set or not
// if variable is set retrurn 1 else nothing
$a = "Karan";
echo isset($a);
if(isset($b))
{
    echo "$b is set";
}
else 
{
    echo "$b is not set";
}

// unset() is used to delete variable and it's value
$z = "Karan";
echo $z; // print value
unset($z); // Remove variable and it's value



?>