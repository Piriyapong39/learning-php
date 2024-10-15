<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local and Global variable</title>
</head>
<body>
    <h2>Global => Local</h2>
    <?php 
        $a = 100;
        function show(){
            global $a;
            echo $a;
        }
        show();
    ?>
    <hr>
    <h2>Local => Global</h2>
    <?php  
        function show2(){
            $GLOBALS["z"] = 550;
        }
        show2();
        print($z)
    ?>
</body>
</html>