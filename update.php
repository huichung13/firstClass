<?php
$dsn="mysql:host=localhost; chartset=utf8;dbname=school";
$pdo=new pdo($dsn, "root", "");
date_default_timezone_set("Asia/Taipei");

$sql="update `student` set `name`='王大明' ,`birthday`='1999-09-22', `tel`='0123456789' where `id`='2'";
$res=$pdo->exec($sql);

echo $sql;

if ($res>=1) {
    echo $res;
    echo "成功";
}else{
    echo $res;
    echo "失敗";
}

?>