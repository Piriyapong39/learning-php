

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <h1>Whie Loop</h1>
    <?php
        $count = 1;
        $limit = 10;
    ?>
    <ul>
        <?php while($count <= $limit){?>
            <li><?php echo "Round = ".$count; ?></li>
        <?php
            $count ++;
        }
        ?>        
    </ul>
    <ul>
        <select name="" id="">
            <?php while($count <= $limit + 10){?>
                <option value="<?php echo $count; ?>"><?php echo "Round = ".$count ;?></option>
            <?php
                $count += 1;
            }
            ?>
        </select>
    </ul>
    <hr>
    <h1>For loop</h1>
    <?php
    ?>
    <ul>
        <?php for($i=1; $i<=10; $i++){?>
            <li><?php echo "Round = ".$i; ?></li>
        <?php
        }
        ?>
    </ul>
    <ul>
        <select name="" id="">
            <?php for($i=1; $i<=10; $i++){?>
                <option value="<?php echo $i?>"><?php echo "Round = ".$i?></option>
            <?php
            }
            ?>
        </select>
    </ul>
    <hr>
    <h1>Do while Loop</h1>
    <?php
        $num = 1;
        $limit = 10;
    ?>
    <ul>
        <?php do {?>
            <li><?php echo "Round = ".$num; ?></li>
        <?php 
            $num += 1;
        } while($num <= $limit);
        ?>
    </ul>
    <ul>
        <?php
            $num = 1;
            $limit = 10;
        ?>
        <select name="" id="">
            <?php do{ ?>
                <option value="<?php echo $num?>"><?php echo "Round = ".$num; ?></option>
            <?php 
                $num++;
            } while($num <= $limit);
            ?>
        </select>
    </ul>
</body>
</html>