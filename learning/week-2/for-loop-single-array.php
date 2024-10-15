<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loop array</title>
</head>
<body>
    <h2>How to use for-loop to access array</h2>
    <ul>
        <?php 
            $color = ["red", "green", "yellow", "black", "white", "grey", "orange"]
        ?>
        <?php for($i=1; $i<count($color); $i++){?>
            <li><?php echo $color[$i]; ?></li>
        <?php
        }
        ?>
    </ul>
    <hr>
    <h2>Array Count Value</h2>
    <ul>
        <p>This built-in function is for count the same data </p>
        <?php 
            $nums = [1, 2, 1, 2, 3, 3];
            print_r($nums);
            echo "<br>";
            $countArr = array_count_values($nums);
            print_r($countArr); 
        ?>
    </ul>
</body>
</html>