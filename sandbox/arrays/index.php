<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
</body>
</html>
<?php 



print '<h1>Definição</h1>';

print '<h2>Lista ordenada</h2>';

$array = [
    'banana',
    'goiaba',
    'morango'
];

print "<pre>";
var_dump($array);
print "</pre>";

print '<hr>';


print '<h2>Array associativo</h2>';

$array = [
    'nome' => 'Iure Santiago',
    'idade' => 18,
    'peso' => 52.7

];

print '<h2>Adicionando valores em um array associativo</h2>';

$array ['instagram'] = '@29iure';
$array ['twitter'] = '@6iure';

print "<pre>";
var_dump($array);
print "</pre>";

print '<h2>Array multidimensional</h2>';

$array = [
    'pessoas' => [
        [
        'id' => 1, 'nome' => 'Iure', 'idade' => 18
    ],

    [
        'id' => 2, 'nome' => 'João', 'idade' => 19 
    ],

    [
        'id' => 3, 'nome' => 'Maria', 'idade' => 23
    ],
 
  ]
];

print "<pre>";
var_dump($array);
print "</pre>";

print '<h2>Obtendo valores dos arrays</h2>';

$array = [
    'pessoas' => [
        [
        'id' => 1, 'nome' => 'Iure', 'idade' => 18
    ],

    [
        'id' => 2, 'nome' => 'João', 'idade' => 19 
    ],

    [
        'id' => 3, 'nome' => 'Maria', 'idade' => 23
    ],
 
  ]
];

print "<pre>";
var_dump($array['pessoas']);
print "</pre>";

print "<pre>";
var_dump($array['pessoas'][0]);
print "</pre>";

print "<pre>";
print_r($array['pessoas'][0]['nome']);
print "</pre>";