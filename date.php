<h4>日期/ 時間函式</h4>
<div>strtottime() - 把文字日期轉成時間序</div>
<?php
$time="2020-04-16 11:30:20";
$serialTime=strtotime($time);


echo date("Y年m月d日 H:i:s" , $serialTime);

echo "<hr>";

$birth="2021-01-19";
$toBirth = strtotime($birth);

$today = date("Y-m-d H:i:s");
$days = (strtotime($birth) - strtotime($today)) / 86400;

echo "還有" . intval($days) . "天";

echo "<hr>";

echo "距離下次的生日還有幾天";
$days=date("z", strtotime($birth)) - date("z", strtotime($today) );
echo $days;

?>

<h4>strtotime() 函式</h4>
<?php

$date= strtotime("+3 days" . $today);
echo date("Y-m-d" , $date);

echo "<hr>";
echo date("Y-m-d" , strtotime("-2 month", strtotime("2020-10-07")));

echo "<hr>";

date_default_timezone_set("Asia/Taipei"); //取時區
echo "今日時間" . date("Y-m-d H:i:s");

echo "<hr>";

echo "印出今天起的三十天日期";
echo "<br>";
for ($i=0; $i < 30; $i++) { 
    $date =strtotime("+" . $i . "days" . $today);

    echo date("Y-M-d D" , $date);
    echo "<br>";

    // echo date("Y-m-d", strtotime("+$i days" . $today)) . "<br>";
}



?>

