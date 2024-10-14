<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch-Case</title>
</head>
<body>
    <?php
        echo "<h2>Switch-case</h2>";
        $number = 3;
        switch($number){
            case 1:
                echo "Sunday";
                break;
            case 2:
                echo "Monday";
                break;
            case 3:
                echo "Tuesday";
                break;
            case 4:
                echo "Wednesday";
                break;
            case 5:
                echo "Thursday";
                break;
            case 6:
                echo "Friday";
                break;
            case 7:
                echo "Saturday";
                break;
            default:
                echo "<h1>มึงมั่วล่ะ</h1>";
        }

        echo "<hr>";

        echo "<h2>Calculate interest</h2>";
        $year = 1;
        $totalLoan = 10000;
        $interest = null;
        switch($year){
            case 5:
                $interest = 75;
                break;
            case 10:
                $interest = 150;
                break;
            default:
                $interest = 300;
                break;
        }
        echo "total pay = ".($totalLoan * ( (100 + $interest) / 100 ) );
    ?>
</body>
</html>