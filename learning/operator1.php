<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Operator and Operand</title>
</head>
<body>
    <?php
        echo "<h1>Operator and Operand</h1>";
        $a = 10;
        $b = 2;
        echo $a." + ".$b." = ".($a + $b)."<br>";
        echo $a." - ".$b." = ".($a - $b)."<br>";
        echo $a." x ".$b." = ".($a * $b)."<br>";
        echo $a." / ".$b." = ".($a / $b)."<br>";
        echo $a." ^ ".$b." = ".($a ** $b)."<br>";
        echo $a." % ".$b." = ".($a % $b)."<br>"; # this operand is like a//b in javascript
    ?>
</body>
</html>