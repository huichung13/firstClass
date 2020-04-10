<h4>反轉陣列</h4>

<?php 
$a=[2, 4, 6, 1, 8];
echo "<pre>";print_r($a); echo "</pre>";
echo "地板函數" .floor(count($a)/2). "<br>";
echo "天花板函數" .ceil(count($a)/2). "<br>";

for ($i=0; $i < (count($a)/2); $i++) { 
    $index=count($a)-1-$i;
    $tmp=$a[$i];
    $a[$i]=$a[$index];
    $a[$index]=$tmp;

}
echo "<pre>"; print_r($a); echo "</pre>";

// $pp=array_pop($a);
// $ss=array_shift($a);
// array_push($a, $ss);
// array_unshift($a, $pp);
// echo $pp. "<br>";
// echo $ss. "<br>";
// echo "<pre>" ;print_r($a); echo "</pre>"


?>