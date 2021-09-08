<?php

/* There are two types of loops. 
Entery - control :- for,while
Exit control  :- do-while
*/
$a = 0;
while($a<10)
{
    echo "<br>".$a;
    $a++;
}
$a = 0;
do {
    # code...
    echo "<br>".$a;
    $a++;
} while ($a <= 10);
for ($i=0; $i < 10; $i++) { 
    # code...
    echo "<br>".$i;
}
echo "<br><br>";

echo "<table border=2>";
for ($i=0; $i < 25; $i++) { 
    # code...
    if ($i %2 == 0) {
        # code...
        echo "<tr bgcolor='cyan'>";
    }
    else{
        echo "<tr bgcolor='yellow'>";
    }
        echo "<td>".$i."</td>";
    echo "</tr>";
}
echo "</table>";

echo "<br><br>";
echo "<table border=2>";
$a=19;
for ($i=1; $i <= 10; $i++) { 
    # code...
    if ($i %2 == 0) {
        # code...
        echo "<tr bgcolor='cyan'>";
    }
    else{
        echo "<tr bgcolor='yellow'>";
    }
        echo "<td>".$a."</td>";
        echo "<td>".$i."</td>";
        echo "<td>".($a*$i)."</td>";
    echo "</tr>";
}
echo "</table>";

?>