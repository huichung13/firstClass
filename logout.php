<?php
setcookie("id", "", time()-60*3);
// 現在的時間 減掉 
setcookie("status", 'true', time()-60*3);
header("location:login.php");

?>