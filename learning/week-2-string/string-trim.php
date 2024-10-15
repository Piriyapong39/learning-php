<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trim</title>
</head>
<body>
    <?php 
        $str1 = " Azujito ";
        echo "<br>";
        echo "before trim";
        echo "<br>";
        echo strlen($str1);
        echo "<br>";
        echo "after trim";
        echo "<br>";
        echo strlen(trim($str1))
    ?>
</body>
</html>