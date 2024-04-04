<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1><?php echo 'Hello World'; ?></h1>

    <ul>
        <?php
            for ($i = 0; $i < 10; $i++) {
                echo "<li>Item $i</li>";
            }
        ?>
    </ul>
    <?php 
        
        print "Hoje é dia " . date("d/m/Y");
        print " Se a hora atual é " . date("G:i:s T");
    ?>
</body>
</html>