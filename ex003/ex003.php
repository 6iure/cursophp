<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // $num = 010;
        // print "O valor da variavel é $num";

        // $v = false;
        // var_dump($v);

        // $num = 3e2;
        // print $num;

        // $vet = [6, 2.5, "Maria", 3, 5];
        // var_dump($vet);

        class Pessoa {
            private string $nome;

        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>