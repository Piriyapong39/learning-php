<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>

</head>
<body>
    <h2>Function Array</h2>
    <ul>
        <?php
            $arrNumber = array(10, 20, 30);
            print_r($arrNumber);
            echo "<br>";
            print_r($arrNumber);
            echo "<br>";
            print($arrNumber[2]);
        ?>
    </ul>
    <h2>Associate Array</h2>
    <ul>
        <?php 
            $rooms = array("Somchai", "Sommai", "Sompong", "Somying");
            print_r($rooms);
            echo"<br>";

        ?>
        <p>Concept of this is combine between key and value like object</p>
        <br>
        <?php 
            $rooms = array("A01"=>"Somchai", "A02"=>"Sommai", "A03"=>"Sompong", "A04"=>"Somying");
            print_r($rooms);
            echo "<br>";
            print($rooms["A01"])
        ?>
    </ul>
    <h2>Function range array</h2>
    <ul>
        <?php 
            $numbers = range(1,10,2);
            print_r($numbers);
            echo "<br>";
            $alphabets = range("A", "Z", 5);
            print_r($alphabets);

        ?>
    </ul>
    <h2>Create array with [ ]</h2>
    <ul>
        <?php
            $numbers = [1, 2, 3, 4, 5, 6, 7, 8];
            print_r($numbers);
        ?>
        <p>Same as other languages</p>
    </ul>
    <hr>
</body>
</html>