<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>
            <p>
                <?php 
                    $num = mt_rand(0, 100);                                         
                    echo "Gerando um número aleatorio entre 0 e 100";
                    echo "O número gerado foi $num";
                
                
                
                
                
                ?>
            </p>
        </h1>
    </main>
</body>
</html>