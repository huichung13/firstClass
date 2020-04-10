<h4>威力彩號嗎</h4>
<hr>
<?php
    // 亂數函式
    $num=[];

    for($i=0; $i<6 ; $i++){
        $num[]=rand(1,38);
    }

    echo "<pre>"; print_r($num);echo "</pre>"

    for($i=0;$i<6; $i++){

        for ($j=0; $j < 6; $j++) { 
            
            if ($i=$j) {
                # code...
            }
        }
    }
    foreach($num as $n){
        echo $n . ",";
    }
?>
<h4>威力彩號碼 - whlie</h4>
<hr>
<?php
    $num=[];
    while (count($num)<6) {
        $tmp=rand(1,38);
        if (count($num)>0 && !in_array($tmp, $num)) {
            echo "重複了" .$tmp;
            $num[]=$tmp;
        }
    }

    echo "<pre>" ;print_r($num); echo "</pre>";

?>