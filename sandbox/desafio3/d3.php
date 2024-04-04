<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor Real para Dólar </h1>
    </header>    
    <main>
        <?php 
            $num = $_GET["reais"];
            $dol = $num /  5.00;
            echo "<p>Você possui <strong>US$ ".(number_format($dol, 2, ',', '.'))."</strong>.</p>";
            echo "<p>*Dado que a cotação do dólar está em <strong>R$ 5,00</strong>.</p>";
        ?>
         <p><button onclick ="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html>