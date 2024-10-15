<?php 
$products = [
    ["keyboard", "คีย์บอร์ด", 1500],
    ["mouse", "เม้าส์", 900],
    ["earphone", "หูฟัง", 6000],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 dimention array</title>
</head>
<body>
    <ul>
        <p>2 dimension array is $products = [[xxx,yyy,zzz], [aaa,bbb,ccc]]</p>
        <p>For i => </p>
        <?php for($i=0; $i<count($products); $i++){?>
            <?php for($j=0; $j<count($products[$i]); $j++){?>
                <li><?php echo $products[$i][$j]; ?></li>
            <?php 
            }
            ?>
            <hr>
        <?php 
        }
        ?>
        <p>Foreach => </p>
        <?php foreach($products as $prod){?>
            <?php foreach($prod as $des){?>
                <li><?php echo $des; ?></li>
            <?php
            }
            ?>
            <hr>
        <?php 
        }
        ?>
        <p>Foreach and table</p>
        <table>
            <thead>
                <tr>
                    <th>ENG</th>
                    <th>TH</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($products as $prod){?>
                    <tr>
                        <?php foreach($prod as $des){?>
                            <td><?php echo $des; ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </ul>
    
</body>
</html>