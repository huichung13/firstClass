<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊會員</title>
    <style>
    
    .form{
        border:2px solid #ccf;
        width:350px;
        display:block;
        margin:auto;

    }
    .form div{
        padding:5px;
        font-size:20px;
        font-weight:500px;
    }
    .form input{
        padding:3px;
        font-size:18px;
        border:0;
        border-bottom:1px solid #aaa;
    }
    </style>
</head>
<body>
    <h1>編輯會員</h1>
    <?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new pdo($dsn, "root", "");
date_default_timezone_set("Asia/Taipei");

$id=$_GET['user'];
$sql="select * from `student` where `id`='$id'";
$user=$pdo->query($sql)->fetch();

    ?>
    <form action="update_user.php" method="post" class="form">
        <input type="hidden" name="id" value="<?=$user['id'];?>">
        <div><label for="acc">帳號：</label><input type="text" name="acc" value="<?=$user['acc'];?>"></div>
        <div><label for="pw">密碼：</label><input type="password" name="pw" value="<?=$user['pw'];?>"></div>
        <div><label for="name">姓名：</label><input type="text" name="name" value="<?=$user['name'];?>"></div>
        <div><label for="email">email：</label><input type="text" name="email" value="<?=$user['email'];?>"></div>
        <div><label for="tel">手機：</label><input type="text" name="tel" value="<?=$user['tel'];?>"></div>
        <div><label for="birthday">生日：</label><input type="date" name="birthday" value="<?=$user['birthday'];?>"></div>
        <div class="">
    <input type="submit" value="送出">
    <input type="reset" value="重罝">
</div>    
    
    </form>
</body>
</html>