<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in functions</title>
</head>
<body>
    <?php

        echo "<h2>Declare and Determine variables</h2>";
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
        echo "check isset total1 = ".isset($total1)."<br>";
        echo "check isset total2 = ".isset($total2)."<br>";
        echo "check isset total3 = ".isset($total3)."<br>";
        echo "check isset total4 = ".isset($total4)."<br>";

        echo "<hr>";
        
        echo "<h2>unset</h2>"; # to reject value varialbel
        echo "total4 before unset => ".$total4."<br>";
        //unset($total4);
        echo "total4 after unset => ".$total4."<br>";

        echo "<hr>";

        echo "<h2>empty</h2>"; # check empty variable null, "" and 0 if these varaible have value like this it will retunr 1 
        echo "check empty total1 => ".empty($total1)."<br>";
        echo "check empty total2 => ".empty($total2)."<br>";
        echo "check empty total3 => ".empty($total3)."<br>";
        echo "check empty total4 => ".empty($total4)."<br>";

        echo "<hr>";

        echo "<h2>is_null</h2>"; # check null => only null it will return 1
        echo "check is_null total1 => ".is_null($total1)."<br>";
        echo "check is_null total2 => ".is_null($total2)."<br>";
        echo "check is_null total3 => ".is_null($total3)."<br>";
        echo "check is_null total4 => ".is_null($total4)."<br>";
        
        echo "<hr>";
        echo "<h2>var_dump</h2>"; # var_dump it will return properties of value and it will return on web applitcation
        echo var_dump($total1)."<br>";
        echo var_dump($total2)."<br>";
        echo var_dump($total3)."<br>";
        echo var_dump($total4)."<br>";


    ?>
</body>
</html>