<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new pdo($dsn, "root", "");
date_default_timezone_set("Asia/Taipei");

$sql="delete from `student` where `id`='3'";

echo $sql;

$res=$pdo->exec($sql);

if ($res>0) {
    echo $res;
    echo "成功";
}else{
    echo $res;
    echo "失敗";
}
?>