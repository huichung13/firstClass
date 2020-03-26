<style>
table{
    border:1px solid #999;
    padding:10px;
}

table td{
    padding:5px;
    text-align:center;
    border:1px solid #ccc;

}

table tr:nth-child(1),
table td:nth-child(1){
    background:#bbb;
}

</style>

<?php
echo "<table border='2'>";

for ($i=0; $i < 10; $i++) { 
    if ($i>0) {
        echo "<tr><td>" . $i ."</td>";
    }else {
        echo "<tr><td> </td>";
    }
    
    for ($j=0; $j < 10; $j++) { 
        if ($j>0) {
            echo "<tr><td>" . ($i * $j) ."</td>";
        }else {
            echo "<tr><td> </td>";
        }        
        }
        
    }
    
    echo "</tr>";



echo "</table>";

echo "<table border='1'>";
for ($i=0; $i < 10; $i++) { 
    //判斷第一列第一格是否空白
    if ($i==0) {
        echo "<tr><td></td>";
    }else {
        echo "<tr><td>" . $i . "</td>";
    }
    
    for ($j=1; $j <= 9; $j++) { 
        //判斷第一列如何呈現
        if ($i==0) {
            echo "<td>" . $j . "</td>";
        }else {
            echo "<td>" . ($i * $j) . "</td>";
        }
        }
        echo "</tr>";
    }



echo "</table>";


?>