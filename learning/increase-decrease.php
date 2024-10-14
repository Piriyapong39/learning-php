<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increasing-Decreasing</title>
</head>
<body>
    <?php
        $a = 5;
        $b = 10;
        echo "<h2>Prefix increasing</h2>"."<br>";
        echo "Start value => ".$a."<br>";
        echo "Increasing value a => ".(++$a)."<br>";
        echo "Present a value =>".$a."<br>"; 
        
        echo "<hr>";
        
        // Postfix increasing
        $a = 5;
        echo "<h2>Postfix increasing</h2>"."<br>";
        echo "Start value => ".$a."<br>";
        echo "Increasing value a => ".($a++)."<br>";
        echo "Present value a => ".$a."<br>";

        echo "<hr>";

        echo "Decreasing value it's just the same as increasing value";

        echo "<hr>";
        echo 5*2-40/5

    ?>
</body>
</html>