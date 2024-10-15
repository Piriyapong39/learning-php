<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List array</title>
</head>
<body>
    <h2>List array</h2>
    <?php 
        $animal = [
            "dog"=> "หมา",
            "cat"=> "แมว",
            "buff"=> "ควาย",
            "pig"=> "หมู"
        ];
    ?>
    <ul>
        <?php foreach($animal as $key=>$val){?>
            <li><?php echo "key = ".$key." "."value = ".$val; ?></li>
        <?php 
        }
        ?>
    </ul>
</body>
</html>