<?php
    // if 判斷式
    $score=55;

    if($score>=60){
        echo "及格";
    }else{
        echo "不及格";
    }

    echo "<hr>";

    // 三元運算子 echo ()? : ;
    echo "三元運算子<br>";

    $result=($score>=60)? "及格": "不及格";
    echo $result;

    echo "<hr>";

    // 判斷成績
    echo "成績:" . $score;
    echo "<br>";
    echo "等級:";

    if ($score>=90) {
        echo "A";
    } else if($score>=75){
        echo "B";
    } else if ($score>=60) {
        echo "C";
    } else {
        echo "D";
    }

    echo "<hr>";

    // 閏年判斷 Leap Year
    /*
    目前使用的格里高利曆閏年規則如下：
        公元年分非4的倍數，為平年。-->公元年除以4可整除。為閏年。
        公元年分為4的倍數但非100的倍數，為閏年。-->公元年除以4可整除，並 除以100不可整除，為閏年。
        公元年分為100的倍數但非400的倍數，為平年。-->公元年除以4可整除，並 (年份處以100部可整除 或 除以400可以整除) 為閏年。
        公元年分為400的倍數 但除以3200不可整除，為閏年。
    */
    $year=2020;
    echo "西元年: ".$year;
    echo "<br>";
    /*
    if ($year%4 !=0) {
        echo "平年";
    } else {
        echo "閏年";
    }
    */

    if ($year%4 ==0 && ($year%100 !=0 || $year%400==0) ) {
        echo "閏年";
    } else {
        echo "平年";
    }

    echo "<hr>";

    // switch 
    if ($score>=90) {
        $level ="A";
    } else if($score>=75){
        $level ="B";
    } else if ($score>=60) {
        $level ="C";
    } else {
        $level ="D";
    }

    echo "成績:" . $score;
    echo "<br>";
    echo "等級:" . $level;

    switch ($level) {
        case 'A':   
            echo "非常好";
            break;
        
        case 'B':   
            echo "可圈可點";
            break;
        
        case 'C':   
            echo "一般水平";
            break;
        
        case 'D':   
            echo "用心不足";
            break;
        default;
        
    }
    
    

    




?>