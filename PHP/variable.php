<!-- In php, variabler always start with php -->
<?php

$a = 50;
echo "$a";

$a = "Karan";
echo "$a";

$a = true;
echo "$a";
/* Method 1 */
$a = 50;
echo "<br/>A value is ".$a;
$b = 30;
echo "<br/>B value is ".$b;

/* method 2 */
echo "<br/>A value is ".$a."<br/>B value is ".$b;
echo '<br/>A value is '.$a.'<br/>B value is '.$b;
/* Method 3 */
echo "<br/>A value is $a <br/>B value is .$b";

/* Method 4 */
echo '<br/>A value is $a <br/>B value is .$';

/* In method 4 $a and $b will be interpreed as a string */
/* It is the diffenece between single quote and double quote in PHp */

/* Arithmatic OPeration */
echo "<br>$a+$b = ".($a+$b);

?>