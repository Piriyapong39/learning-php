<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenation</title>
</head>
<body>
    <?php
       $name = "Piriyapong";       
       echo $name."Trakanjun"."<br>";   
       echo "Before concat => ".$name."<br>";
       $name.="\tTrakanjun";
       echo "After concat => ".$name
    ?>
</body>
</html>