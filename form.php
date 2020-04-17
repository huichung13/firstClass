<?php

// $weight=$_GET['weight'];
// $height=$_GET['height'];

// isset() or empty()
if (isset($_POST['weight']) && isset($_POST['height'])) {
    
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    
    // $bmi=$weight / pow($height/100, 2) ;
    
    echo "你輸入的身高是(公分)：" . $height . "<br>";
    echo "你輸入的體重是(公斤)：" . $weight . "<br>";

    if(!empty($height)){
        $bmi=round($weight / pow($height/100, 2), 2);
        echo "你的BMI 是：" . $bmi . "<br>";  //round 四捨五入
    }else{
        echo "<span style='color:red'> 請輸入正確數字 </span>";
    }
    
    if ($bmi < 18.5) {
        echo "體重過輕";
    }elseif($bmi < 24){
        echo "你很健康";
    }elseif($bmi < 27){
        echo "過重";
    }elseif($bmi < 30){
        echo "輕度肥胖";
    }elseif($bmi < 35){
        echo "中度肥胖";
    }else{
        echo "重度肥胖";
    }
}


    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>表單傳值</title>
</head>
<body>
<h4>BMI 計算機</h4>
    <form action="?" method="post">
        身高：<input type="number" name="height" step="0.01" id=""><br> <!-- 以級距做成浮點數的效果 -->
        體重：<input type="number" name="weight" id=""><br>
        <input type="submit" value="送出">
    </form>
</body>
</html>