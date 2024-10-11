<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in functions</title>
</head>
<body>
    <?php

        $total1 = null;
        $total2 = "";
        $total3 = 0;
        $total4 = "azujito";

        echo "total1 = ".$total1."<br>";
        echo "total2 = ".$total2."<br>";
        echo "total3 = ".$total3."<br>";
        echo "total4 = ".$total4."<br>";
        
        echo "<hr>";

        echo "<h2>isset</h2>"; # to check variable if we set variable rerturn true(1) if not set variable return false(0)
        echo "total1 = ".isset($total1)."<br>";
        echo "total2 = ".isset($total2)."<br>";
        echo "total3 = ".isset($total3)."<br>";
        echo "total4 = ".isset($total4)."<br>";

        echo "<hr>";
        echo "total4 before unset => ".$total4."<br>";
        unset($total4);
        echo "total4 after unset => ".$total4."<br>";

    ?>
</body>
</html>