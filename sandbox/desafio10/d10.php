<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $ano = $_GET['ano'] ?? 0;
    $anoi = $_GET['anoi'] ?? 0;
    
    ?>
    <main>
        <h1>Calculando sua Idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <label for="nascimento">Em que ano você nasceu?</label>
        <input type="number" name="ano" id="ano" value="<?=$ano?>">
        <label for="idadeAno">Quer saber sua idade em que ano? (estamos em <b>2023</b>)</label>
        <input type="number" name="anoi" id="anoi" value="<?=$anoi?>">
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
        <section>

            <?php 
                $idade = $anoi - $ano; 
            ?>
            <h2>Resultado</h2>
            <p>Se você nasceu em <?php echo $ano?> então terá <b><?php echo $idade?></b> </p>
        </section>
</body>
</html>