<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator 2</title>
</head>
<body>
    <?php
        echo "<h1>Compare operator</h1>";
        $a = "500";
        $b = 600;
        echo $a <=> $b;
        echo "<h3>Condition of spaceship</h3>";
        echo " a <=> b"."<br>";
        echo "If a > b it will return 1"."<br>";
        echo "If a == b it will return 0"."<br>";
        echo "Id a < b it will return -1"."<br>";
        var_dump($a<=>$b)
    ?>
</body>
</html>