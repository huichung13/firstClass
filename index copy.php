<h1>資料庫新增</h1>
<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root", "");
date_default_timezone_set("Asia/Taipei");

$sql="insert into student
(`id`, `acc`, `pw`, `name`,
 `email`, `tel`, `creat_time`, `update_time`, `birthday`)
values
(null, 'momo','mo13', '中桃',
 'mo@gmail.com', '0987654321',
  '".date("Y-m-d H:i:s")."',
  '".date("Y-m-d H:i:s")."', '1983-01-01')";

echo $sql;
echo "<br>";
// $pdo->query($sql);
echo $pdo->exec($sql); //不回傳資料，帶回傳成功或失敗(0 or 1)
echo "資料已新增加";

?>