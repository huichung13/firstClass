<?php

// for loop
/*
for ($i=0; $i < 10; $i++) { 
    for ($j=0; $j < 10; $j++) { 
        echo "hello" . $i . "-" . $j . "<br>";
    }
    
}
*/


// 九九乘法表
echo "<table border='2'>";
echo "<tr>";
for ($i=1; $i < 10; $i++) { 
    echo "<td>";
    for ($j=1; $j < 10; $j++) { 
        
        echo $j . " * " . $i . " = " . ($i * $j) . " <br> " ;
    }
    echo "</td>";
}
echo "</tr>";
echo "<table>";

?>

