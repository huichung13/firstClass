<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new pdo($dsn, "root", "");
date_default_timezone_set("Asia/Taipei");

$id=$_GET["user"];

$sql="delete from `student` where `id`='$id'";


$res=$pdo->exec($sql);

if ($res>0) {
    header("location:list_user.php");
    // echo "刪除成功";
}else{
    echo "刪除失敗";
    echo "可能原因: 該筆資料已不存在; 資料庫連線有問題; SQL語法有誤";
}


?>