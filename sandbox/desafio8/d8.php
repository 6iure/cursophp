<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_GET['numero'] ?? 0;     
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SElF']?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

        <section>
            <h1>Resultado Final</h1>
            <h3>Analisando o número <?php echo $numero?>, temos: </h3>

            <?php 

            $raizQ = sqrt($numero);
            $raizC = $numero ** (1/3);
            ?>

            <p>
                Sua raiz quadrada: <b><?php echo $raizQ."<br>" ?> </b>
                Sua raiz cúbica: <b><?php echo $raizC ?> </b>
            </p>


        </section>
</body>
</html>