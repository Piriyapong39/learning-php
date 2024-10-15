<?php 
$example1 = [
    "dog",
    "cat",
    "pig"
];

$example2 = [1, 4, 2, 5, 3, 11, 112, 30, 7, 1033, 3011];

$example3 = [
    "red"=> "แดง",
    "green"=> "เขียว",
    "white"=> "ขาว",
    "purple"=> "ม่วง"
];

$example4 = range(1,20,2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-in-array-function</title>
</head>
<body>
    <ul>
        <h2> Push and Pop array</h2>
        <?php 
            print_r($example1);
            echo "<br>";
            echo "After push"."<br>";
            array_push($example1, "little hippo");
            print_r($example1);
            echo "<br>";
            echo "After pop<br>";
            array_pop($example1);
            print_r($example1);
        ?>
        <hr>
        <h2>Sort and Rsort array</h2>
        <?php
        sort($example2);
        print_r($example2);
        ?>
        <hr>
        <h2>Find data in array</h2>
        <?php 
            if(array_key_exists("olana", $example3)){
                echo "exist";
            }else{
                echo "doesn't exist";
            }
        ?>
        <p>********* Remember ************</p>
        <?php
            if(in_array(200, $example4)){
                echo "exist";
            }else{
                echo "doesn't exist";
            }
        ?>
    </ul>
</body>
</html>