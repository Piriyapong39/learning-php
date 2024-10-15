<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>echo && print</title>
</head>
<body>
    <?php
        $name = "สมชาย";
        $score = 85;

        echo "คุณ $name ได้คะแนน: $score";
        echo "<br>";
        print("คุณ $name ได้คะแนน: $score");
        echo "<br>";
        printf("คุณ %s ได้คะแนน: %d", $name, $score);
        echo "<br>";
        echo sprintf("คุณ %s ได้คะแนน: %d", $name, $score);

        echo "<hr>";

        $price = 1234.5678;
        echo "ราคา: $price บาท";  
        echo "<br>";
        echo "ราคา: " . number_format($price, 2) . " บาท";
        echo "<br>";  
        printf("ราคา: %.2f บาท", $price);  
        echo "<br>";
        echo sprintf("ราคา: %.2f บาท", $price); 
    ?>
</body>
</html>