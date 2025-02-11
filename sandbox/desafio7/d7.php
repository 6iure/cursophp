<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    $salario = $_GET['salario'] ?? 0;
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário R$</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <h3>Considerando o salário mínimo de <strong>R$ 1320,00</strong></h3>
            <input type="submit" value="Calcular">
        </form>
    </main>

        <section id="resultado">
            <h1>Resultado Final</h1>
            <?php 
                $qtdSalario = intdiv($salario, 1320);
                $resto = $salario % 1320;
            ?>

            <p>

                Se você recebe um salário de R$ 

                <?php 
                    echo $salario
                ?>

                , ganha 

                <b> 

                    <?php
                        echo $qtdSalario 
                    ?> 

                    salários minimos 

                </b> 

                + R$

                <?php 
                    echo $resto
                ?> 

            </p>

        </section>
</body>
</html>