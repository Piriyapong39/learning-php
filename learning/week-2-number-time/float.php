<?php 
$num1 = 100.55;
$num2 = 250;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Float</title>
</head>
<body>
    <?php 
        echo "ceil => ".ceil($num1)."<br>";
        echo "floor => ".floor($num1)."<br>";
        echo "round => ".round($num1)."<br>";
    ?>
    <hr>
    <h3>number_format</h3>
    <?php 
        $newNum = number_format($num2, 2);
        echo $newNum;
    ?>
    <hr>
    <h3>manage date</h3>
    <?php 
        echo "time() => ".time()."<br>";
        echo "date() => ".date("y-m-d")."<br>";
    ?>
</body>
</html>