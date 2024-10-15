<?php 
include "./function/functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1>Function without parameter</h1>
    <?php 
        greetUser();
    ?>
    <hr>
    <h1>Function with parameter</h1>
    <?php 
        sumaryTotal(1,2);
    ?>
    <hr>
    <h1>Function with return</h1>
    <?php 
        echo checkMonth(1);
    ?>
</body>
</html>