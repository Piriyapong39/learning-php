<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable</title>
</head>
<body>
    <?php
        $x = 5;
        $y = "10";
        echo "total = ".($x+$y)."<hr>";

        echo "<h3>var_dump function</h3>"."<br>";
        $z = 10.5532;
        $a = false;
        var_dump($z);
        echo "<br>";
        var_dump($a);
        echo "<hr>";
    ?>
</body>
</html>