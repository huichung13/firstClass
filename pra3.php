<h4>五百年內的閏年</h4>
<hr>
<?php

$year=[];
for ($i=2020; $i < 2520; $i++) { 
    echo "西元年: " .$i. " 是";
    if ( $i%4 == 0 && ($i%100 !=0 || $i%400 == 0)) {
        echo "閏年";
        $year[]=$i;
    }else{
        echo "平年";
    }
    echo "<br>";
}



?>