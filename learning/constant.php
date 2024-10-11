<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant</title>
</head>
<body>
    <?php
        echo "Hello constant variable"."<br>";
        define("score", 100);
        $score = 10.99;
        $score = $score + 1.01;
        echo score;

        echo "<hr>";

        echo "<h4>PI</h4>";
        define("PI_VALUE", 22/7);
        $diameter = 32;
        $circleArea = PI_VALUE * ($diameter / 2) ** 2 ;
        echo "Area of circle = ".number_format($circleArea, 2)
    ?>
</body>
</html>