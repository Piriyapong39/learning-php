<?php 
function greetUser(){
    echo "Hello User";
}

function summary($a, $b){
    return $a + $b;
}

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
        $a = 10;
        $b = 5;
        echo summary($a, $b);
    ?>
</body>
</html>