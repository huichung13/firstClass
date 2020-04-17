<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作業說明</title>
</head>
<body>
    <?php

    $month=date("m");

    if (isset($_GET["month"])) {
        $month=$_GET["month"];
    }
    ?>
    <a href="index1.php?month=<?=$month-1;?>">上一月</a>
    <span>本月(<?=$month;?>)</span>
    <a href="index1.php?month=<?=$month+1;?>">下一月</a>
</body>
</html>