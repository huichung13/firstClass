<h4>陣列練習- 學生成績資料設計</h4>
<hr>
<?php
    $judy=["國文"=>95, "英文"=>64, 70, 90, 84];
    $amo=[95, 64, 70, 90, 84];
    $John=[95, 64, 70, 90, 84];
    $Peter=[95, 64, 70, 90, 84];
    $Hebe=[95, 64, 70, 90, 84];
    echo "<pre>" ; print_r($judy, $amo); echo "</pre>";

    $score=[
        "judy"=>[
            "國文"=>95,
            "英文"=>64,
        ],
        "amo"=>[
            "國文"=>88,
            "英文"=>78,
        ],
        "John"=>[
            95, 64, 70, 90, 84,
        ]

        ];
    echo "<pre>";print_r($score);echo "</pre>"

?>
<hr>
<?php
    for($i=0;$i<count($a);$i++){
        echo $a[$i] ." , ";
        
        if(i%9==8){
            echo "<br>";

        }
    }
    

?>