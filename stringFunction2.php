<h4>字串函式-- "好的~ 明天天氣晴"</h4>
<?php
$str="好的~ 明天天氣晴";
$search="天天";
$target="<span style='color:red; font-size:24'>天天</span>";

echo str_replace($search, $target, $str);





?>