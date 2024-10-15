<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach array</title>
</head>
<body>
    <h2>How to access array by foreach</h2>
    <ul>
        <?php 
            $days = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"]
        ?>
        <p>How to loop with foreach</p>
        <?php foreach($days as $day){?>
            <li><?php echo $day; ?></li>
        <?php 
        }
        ?>
    </ul>
    <hr>
    <ul>
        <p>Loop to table</p>
        <thead>
        <tr>
            <?php foreach($days as $day){?>
                <td><?php echo $day; ?></td>
            <?php 
            }
            ?>
        </tr>
    </thead>
    </ul>
</body>
</html>