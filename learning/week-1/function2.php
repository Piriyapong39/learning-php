<?php 
include "./function2/functions2.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F</title>
</head>
<body>
    <!-- Calculate employee salary -->
     <?php 
        $salary = 8000;
        $totalIncome = calSalary($salary);
        echo $totalIncome
     ?>
     
</body>
</html>