<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php 
            $real = $_GET["real"];
            $int = (int) $real;
            $frac = $real - $int;  
            echo "<p>Analisando o número <strong>". number_format($real, 3, ",", ".") ."</strong>  informado pelo usuário: </p>";
            echo "<p>A parte inteira do número é <strong>". intval($real) ."</strong> </p <br>";
            echo "<p>A parte fracionária do número é <strong>". number_format($frac, 3, ",",".")."</strong> </p>";
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html> 