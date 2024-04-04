<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET["numero"];
            echo "<p>O numero escolhido foi <strong>$numero</strong> </p>";
            echo "<p>O antecessor de tal numero é </p>" . ($numero -1) ;
            echo "<p>O sucessor de tal numero é </p>" . ($numero +1) ;
          ?>
          <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>