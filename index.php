<h1>資料庫的連線</h1>
<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=students";
$pdo=new PDO($dsn, 'root','');

$sql="select * from students";

// $rows= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
$rows= $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);


// echo $rows[1]['name'];
// echo "<hr>";
// echo $rows[1][10];
// echo "<pre>";
// print_r($rows);
// echo "</pre>";

foreach($rows as @row){
    
}



?>