<?php 
$arr = [1, 2, 3, 4, 5];
$str = "a,b,c,d,e,f";
$txt = "azujito";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explode and Implode</title>
</head>
<body>
    <ul>
        <h3>Implode</h3>
        <p>You can use join like javascript</p>
        <?php 
            echo "before implde => ";
            print_r($arr);
            echo "<br>";
            $resultImplode = implode(",",$arr);
            echo "after implode => ";
            echo $resultImplode;
            echo "<br>";
        ?>
        <hr>
        <h3>Explode</h3>
        <?php
            echo "before explode => ";
            print_r($str);
            echo "<br>";
            $resultExplode = explode(",", $str);
            echo "after explode => ";
            print_r($resultExplode)
        ?>
        <hr>
        <h3>substr</h3>
        <?php
            echo substr($txt, 2);
            echo "<br>";
            echo substr($txt, 0, 5);
        ?>
        <hr>
        <h3>str_split</h3>
        <?php 
            echo "Before split => ".$txt."<br>";
            $resultSplit = str_split($txt);
            print_r($resultSplit);
        ?>  
    </ul>
</body>
</html>