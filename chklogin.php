<?php
include "dbconnect.php";
// include("dbconnect.php");

if (!empty($_POST['acc'])) {

    echo "有送出資料";
    $acc = $_POST['acc'];
    $pw = $_POST['pw'];
    // 算登入數，有抓到一筆資料
    $sql = "select count(*) from student where `acc`='$acc' && `pw`='$pw'";
    // $user = $pdo->query($sql)->fetch();
    $user = $pdo->query($sql)->fetchcolumn();

    echo $sql;
    // print_r($user);

    if($user>0){
        echo "登入成功";
        header("location:list_user.php");
    }else{
        echo "登入失敗";
        header("location:login.php?status=false");
    }

    // if($acc==$user['acc'] && $pw==$user['pw']){
    //     echo "登入成功";

    // }else{
    //     echo "登入失敗";
    // }
}


?>