<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員列表</title>
</head>
<style>
    table{
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: auto;
    }
    table td{
        border: 1px solid #ccc; 
    }
</style>
<body>
    <h1>會員列表</h1>
<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");


$sql="select * from `student`";
$rows=$pdo->query($sql)->fetchAll();
?>

<!-- table>tr*2>td*8 -->
<table>
    <tr>
        <td>id</td>
        <td>帳號</td>
        <td>密碼</td>
        <td>姓名</td>
        <td>email</td>
        <td>手機</td>
        <td>生日</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>

    
<?php
foreach ($rows as $row) {
    echo "<tr>";
    echo "    <td>" .$row['id']."</td>";
    echo "    <td>" .$row['acc']."</td>";
    echo "    <td>" .$row['pw']."</td>";
    echo "    <td>" .$row['name']."</td>";
    echo "    <td>" .$row['email']."</td>";
    echo "    <td>" .$row['tel']."</td>";
    echo "    <td>" .$row['birthday']."</td>";
    echo "    <td>" .$row['create_time']."</td>";
    echo "    <td>";
    echo "<a href='edit_user.php?user=".$row['id']."'><button> 編輯</button></a>";
    echo "<a href='del_user.php?user=".$row['id']."'><button> 刪除</button></a>";
    // echo "<button> 刪除</button>";
    
    echo "</td>";
    echo "</tr>";
    
}

?>
</table>
</body>
</html>