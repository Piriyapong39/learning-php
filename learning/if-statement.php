<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-statement</title>
</head>
<body>
    <?php
        // if statement
        echo "<h2>If statement</h2>";
        $balance = 1000;
        $transaction = 300;
        echo "Total balance = ".$balance."<br>";
        if($balance >= $transaction){
            echo "You can withdraw = ".$transaction."<br>";
            echo "Your total balance = ".($balance -= $transaction)."<br>";
        }else{
            echo "Cannot withdraw your total balance is less than your transaction";
        }
        echo "Return your card";

        echo "<hr>";

        // else if
        echo "<h2>Else if</h2>";
        $score = 103;
        if($score > 100){
            print "invalid score";
        }else if($score >= 80){
            print "A";
        }else if($score >= 70){
            print "B";
        }else if($score >= 60){
            print "C";
        }else if($score >= 50){
            print "D";
        }else{
            print "F";
        }

        echo "<hr>";

        // ternary operator
        echo "<h2>Teranry operator</h2>";
        $a = 3;
        $b = 5;
        $a > $b ? print($a." is greater than ".$b) : print($a." is less than ".$b)
    ?>
</body>
</html>