<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    
</body>
</html>
<?php 

print '<h1>Ordenação</h1>';

print '<h2>Sort</h2>';

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacate'
];

print "<pre>";
print_r($array);
print "</pre>";

sort($array);

print "<pre>";
print_r($array);
print "</pre>";

// 

print '<hr>';

print '<h2>Asort</h2>';

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacate'
];

print "<pre>";
print_r($array);
print "</pre>";

asort($array);

print "<pre>";
print_r($array);
print "</pre>";

// 

print '<hr>';

print '<h2>Rsort </h2>';

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacate'
];

print "<pre>";
print_r($array);
print "</pre>";

rsort($array);

print "<pre>";
print_r($array);
print "</pre>";

// 

print '<hr>';

print '<h2>Arsort </h2>';

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacate'
];

print "<pre>";
print_r($array);
print "</pre>";

arsort($array);

print "<pre>";
print_r($array);
print "</pre>";

//

print '<hr>';

print '<h2>Ksort </h2>';

$array = [
    'nome' => 'Iure',
    'instagram' => '@29iure',
    'a' => 'b'
];

print "<pre>";
print_r($array);
print "</pre>";

ksort($array);

print "<pre>";
print_r($array);
print "</pre>";

//

print '<hr>';

print '<h2>Krsort </h2>';

$array = [
    'instagram' => '@29iure',
    'nome' => 'Iure',
    'a' => 'b'
];

print "<pre>";
print_r($array);
print "</pre>";

krsort($array);

print "<pre>";
print_r($array);
print "</pre>";



//

print '<hr>';

print '<h2>Usort </h2>';



$array = [
   
        [
        'id' => 1,
        'nome' => 'Pablo',
        'idade' => 67
    ],

    [
        'id' => 2,
        'nome' => 'Iure',
        'idade' => 18 
    ],

    [
        'id' => 3,
        'nome' => 'Murilo',
        'idade' => 19
    ],
 
  
];

print "<pre>";
print_r($array);
print "</pre>";

usort($array,function($a,$b){

    //são iguais
    if($a['idade'] == $b ['idade']) return 0;

    return $a['idade'] < $b['idade'] ? -1 : 1; 
});

print "<pre>";
print_r($array);
print "</pre>";

//







print '<hr>';

print '<h2>Uasort </h2>';



$array = [
   
    [
    'id' => 1,
    'nome' => 'Pablo',
    'idade' => 67
],

[
    'id' => 2,
    'nome' => 'Iure',
    'idade' => 18 
],

[
    'id' => 3,
    'nome' => 'Murilo',
    'idade' => 19
],


];

print "<pre>";
print_r($array);
print "</pre>";

uasort($array,function($a,$b){

//são iguais
if($a['idade'] == $b ['idade']) return 0;

return $a['idade'] < $b['idade'] ? -1 : 1; 
});

print "<pre>";
print_r($array);
print "</pre>"; 

//

print '<hr>';

print '<h2>Shuffle</h2>';

$array = [
    'goiaba',
    'banana',
    'morango',
    'abacate'
];

print "<pre>";
print_r($array);
print "</pre>"; 

shuffle($array);

print "<pre>";
print_r($array);
print "</pre>"; 

//

print '<hr>';

print '<h2>Natsort</h2>';

$array = ['10.0v', '1.0v', '2.0v'

];

print "<pre>";
print_r($array);
print "</pre>"; 

sort($array);

print "<pre>";
print_r($array);
print "</pre>"; 

natsort($array);

print "<pre>";
print_r($array);
print "</pre>"; 