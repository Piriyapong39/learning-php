<?php 

$arr1 = ["product"=>"table", "color"=>"blue", "price"=>5500];
$arr2 = ["discount"=>500, "shipping"=>300, "price"=>7500];

$arr3 = ["a", "b", "c", "d"];
$arr4 = ["bangkok", "buriram", "chiang-mai", "don-meuang"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function combine array</title>
</head>
<body>
    <h3>array_merge</h3>
    <?php
        $resultMerge = array_merge($arr1, $arr2);
        print_r($resultMerge);
    ?>
    <hr>
    <h3>array_merge_recursive</h3>
    <?php 
        $resultRescusive = array_merge_recursive($arr1, $arr2);
        print_r($resultRescusive);
        echo "<br>";
    ?>
    <hr>
    <h3>array_combine</h3>
    <?php 
        $resultCombine = array_combine($arr3, $arr4);
        print_r($resultCombine);
    ?>
</body>
</html>