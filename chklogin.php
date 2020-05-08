<?php
include "dbconnect.php";
// include("dbconnect.php");

if (!empty($_POST['acc'])) {

    echo "有送出資料";
    $acc = $_POST['acc'];
    $pw = $_POST['pw'];
    // 算登入數，有抓到一筆資料
    // $sql = "select count(*) from student where `acc`='$acc' && `pw`='$pw'";
    $sql = "select * from student where `acc`='$acc' && `pw`='$pw'";
    // $user = $pdo->query($sql)->fetch();
    $user = $pdo->query($sql)->fetchcolumn();

    // echo $sql;
    // print_r($user);

    // if($user>0){
    //     echo "登入成功";
    //     header("location:list_user.php");
    // }else{
    //     echo "登入失敗";
    //     header("location:login.php?status=false");
    // }

    if(!empty($user)){
        echo "登入成功";
        setcookie("id", $user['id'], time()+ 60*3);
        setcookie("status", 'true', time()+60*3);
        // $user['id'] 是否是現在登入的帳號id
        header("location:list_user.php");
    }else{
        echo "登入失敗";
        // 過期時間: 現在時間+10秒
        setcookie("status", 'false', time()+10);
        header("location:login.php");
    }
}


?>