<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_GET['valor1'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 0;
    $valor2 = $_GET['valor2'] ?? 0;
    $peso2 = $_GET['peso2'] ?? 0;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Primeiro valor:</label>
        <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
        <label for="p1">Primeiro peso:</label>
        <input type="number" name="peso1" id="peso1" value="<?=$peso1?>"> 
        <label for="v2">Segundo valor:</label>
        <input type="number" name="valor2" id="valor2" value="<?=$valor2?>"> 
        <label for="p2">Segundo peso:</label>
        <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
        <input type="submit" value="Calcular Médias">
        </form>
    </main>

        <section>
            <h2>Cálculo das Médias</h2>
            <p>Analisando os valores <?php echo $valor1?> e <?php echo $valor2?> </p>

                <?php 
                    $mediaS = ($valor1 + $valor2) / 2; 
                    $mediaP = (($valor1*peso1) + ($valor2*$peso2)) / ($peso1 + $peso2);
                ?>
                <p>
                    A <b>Média simples</b> entre os dois números é <b><?php echo $mediaS. "<br>" ?></b> 
                    A <b>Média ponderada</b> entre os dois números é <b><?php echo $mediaP ?></b>
                </p>

            </section>
</body>
</html>
