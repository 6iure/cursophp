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
        <h1>Trabalhando com numeros aleatorios</h1>
        <?php 
            $num = mt_rand( 0, 100 );                                         
            echo "<p>Gerando um número aleatorio entre 0 e 100...
            <br> O valor gerado foi <strong>$num</strong></p>"
         ?>
         <button onclick= "javascript:document.location.reload()">Gerar outro número</button>
    </main>
</body>
</html> 