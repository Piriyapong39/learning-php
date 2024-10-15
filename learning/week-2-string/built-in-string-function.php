<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in-string-function</title>
</head>
<body>
    <h3>strcmp</h3>
    <?php
        $str1 = "klui";
        $str2 = "Klui";
        $result1 = strcmp($str1, $str2);
        echo $result1;
    ?>
    <hr>
    <h3>strcasecmp</h3>
    <?php 
        $str3 = "AzuJito";
        $str4 = "azujito";
        $result2 = strcasecmp($str3, $str4);
        echo $result2;
    ?>
    <hr>
    <h3>strspn</h3>
    <?php 
        $str5 = "piriyaponG";
        $str6 = "piriyapong";
        $result3 = strspn($str5, $str6);
        echo $result3;
    ?>
    <hr>
    <h3>strcspn</h3>
    <?php 
        $str7 = "TRAkanJun";
        $str8 = "trakanjun";
        $result4 = strcspn($str7, $str8);
        echo $result4;
    ?>
</body>
</html>