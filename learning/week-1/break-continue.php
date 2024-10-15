<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break-Continue</title>
</head>
    <h1>Continue</h1>
    <ul>
    <?php for($i=1; $i<=20; $i++){?>
        <?php if( $i%3 !== 0){?>
            <?php continue; 
        } ?>
        <li><?php echo "Round = ".$i; ?></li>
    <?php
    }
    ?>
    </ul>
    <hr>
    <h1>Break</h1>
    <ul>
        <?php for($i=1; $i<=20; $i++){?>
            <?php if($i >= 12){?>
                <?php break; 
            }?>
            <li><?php echo "Round = ".$i; ?></li>
        <?php
        }
        ?>
    </ul>
</>
</html>