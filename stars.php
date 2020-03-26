<style> 

*{
  font-family:"Courier New";
  linehigh:12;

</style>

<?php
// 等寬字體
$star=5;
 for ($i=0 ; $i<$star ; $i++){
    for ($j=$i ; $j<$star-1 ; $j++){
      echo "&nbsp &nbsp";
     }
    for ($k=0 ; $k< ($i*2-1) ; $k++){
      echo " *";
     }
    echo "<br>";
}

echo "<hr>";
for ($i=0; $i < 5; $i++) { 
    
    for ($a=0; $a < $i+1; $a++) { //+1才有執行第一次迴圈，不然是0 < 0
      echo "*";
    }
  echo "<br>";
}

echo "<hr>";
for ($i=0; $i < 5; $i++) { 
    
    for ($a=0; $a < (5-$i); $a++) { //a 與 i 總數加起來是5
      echo "*";
    }
  echo "<br>";
}

// 正三角形
echo "<hr>";
for ($i=0; $i < 5; $i++) { 
    for ($k=0; $k<(4-$i); $k++){
      echo "&nbsp";  //not break space
    }

    for ($a=0; $a < ($i*2+1); $a++) { 
      echo "*"; 
    }
  echo "<br>";
}

// 菱形
echo "<hr>";
for ($i=0; $i < 5; $i++) { 
    for ($k=0; $k<(4-$i); $k++){
      echo "&nbsp";  //not break space
    }

    for ($a=0; $a < ($i*2+1); $a++) { 
      echo "*"; 
    }
  echo "<br>";
}

// 菱形 解法二
echo "<hr>";

for ($i=0; $i < 9; $i++) { 
  // 利用判斷式來決定t的值，再用t的值來決定空白和星星的數量
  if ($i<=4) {
    $t=$i;
  }else{
    $t=8-$i;
  }
  // 印空白
  for ($k=0; $k < (4-$t); $k++) { 
    echo "&nbsp";
  }

  // 印星星
  for ($j=0; $j < ($t*2+1); $j++) { 
    echo "*";
  }

  echo "<br>";
}

// 矩形
echo "<hr>";

for ($i=0; $i < 5; $i++) {
  
  if ($i==0 || $i==4) {
    
    for ($j=0; $j < 5; $j++) { 
      echo "*";
    }

  }else {
    
    for ($k=0; $k < 5; $k++) { 
      if ($k==0 || $k==4) {
        echo "*";
      }else{
        echo "&nbsp;";
      }
    }
    
  }
  echo "<br>";
}

// 矩形中間打X
echo "<hr>";
$x=5;

for ($i=0; $i < $x; $i++) {
  
  if ($i==0 || $i==($x-1)) {
    
    for ($j=0; $j < $x; $j++) { 
      echo "*";
    }

  }else {
    
    for ($k=0; $k < $x; $k++) { 
      if ($k==0 || $k==($x-1) || $k==$i || $k==($x-$i-1)) {
        echo "*";
      }else{
        echo "&nbsp;";
      }
    }
    
  }
  echo "<br>";
}

?>