<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loop array</title>
</head>
<body>
    <h2>How to access array by while loop</h2>
    <ul>
        <p>Whie loop</p>
        <?php 
            $color = ["red", "green", "yellow", "black", "white", "grey", "orange"];
            $limit = count($color);
            $i = 0
        ?>
        <?php while($i < $limit){ ?>
            <li><?php echo $color[$i]; ?></li>
        <?php 
            $i++;
        }
        ?>
    </ul>
    <hr>
    <ul>
        <p>Use forEach</p>
        <p> *** Be carefull some functions cannot use anymore</p>
        <?php 
            $color = ["red"=>"สีแดง", "yellow"=>"สีเหลือง", "green"=>"สีเขียว", "black"=>"สีดำ", "white"=>"สีขาว"];
        ?>
        <?php foreach($color as $key=>$val){?>
            <li><?php echo $key." : ".$val ;?></li>
        <?php
        }
        ?>
    </ul>
</body>
</html>