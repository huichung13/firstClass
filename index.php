<?php

echo "Hello World";
$a=1;
$a=2.1;
echo "<br>";
echo $a;

// 宣告一個常數
// 常數不可變更
define("PI",3.1415927);
echo PI;

// 運算子++ => $b=$b+1

$a="A";
$b="B";
echo $a;
echo "<br>";
echo $b;
echo "<br>";


// 三元運算子
$a=0;

echo ($a>0)?"很貴":"免費";

echo "<hr>";

if($a>0){
    echo "很貴";
}
else {
    echo "free";
}

?>