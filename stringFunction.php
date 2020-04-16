<h4>字串函式練習</h4>
<div>字串 aaddw1123</div>
<?php
$str="aaddw1123";
$str2="";

for ($i=0; $i < strlen($str); $i++) { 
    $str2=$str2 . " * ";
    echo "i=" . $i . "=>" . $str2 . "<br>";
}

echo $str2;

echo "<hr>";

$str3=str_repeat("*", strlen($str));
echo $str3;

echo str_repeat("Good", 10);

?>

<h4>字串切割</h4>
<div>this is a book</div>
<?php 
$str="this, is, a, book";
$strArray=explode(", ", $str);

echo "<pre>";
print_r($strArray);
echo "</pre>";

echo $strArray[3];

echo "<hr>";

$strArray2=implode(" ", $strArray);
echo $strArray2;

echo "<br>";

echo "使用join函數組合陣列元數";
echo "<br>" . join(" ", $strArray);


echo "<hr>";

$greatMan="The reason why a great man is great is that he resolves to be a great man";
$greatMan2=mb_substr($greatMan, 0 , 10);
echo $greatMan2 . "...";




?>