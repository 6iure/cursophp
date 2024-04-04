<!DOCTYPE html>
<html lang="pr-br">
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

print '<h1>Funções</h1>';

$array = [
    'banana',
    'goiaba',
    'morango',
    'abacate'
];

$arrayAssociativo = [
    'nome' => 'Iure Santiago', 'instagram' => '@29iure'
];

print '<h2>Count</h2>';

print "<pre>";
print count($array);
print "</pre>";

print "<pre>";
print count ($arrayAssociativo);
print "</pre>";

//

print '<hr>'; 

print '<h2>Array Keys</h2>';

print "<pre>";
print_r (array_keys($array));
print "</pre>";

print "<pre>";
print_r (array_keys($arrayAssociativo));
print "</pre>";

// 

print '<hr>'; 

print '<h2>Array Values</h2>';

print "<pre>";
print_r (array_values($array));
print "</pre>";

print "<pre>";
print_r (array_values($arrayAssociativo));
print "</pre>";

// 

print '<hr>'; 

print '<h2>In array</h2>';

print "<pre>";
var_dump (in_array('banana', $array));
print "</pre>";

print "<pre>";
var_dump (in_array('banana', $arrayAssociativo));
print "</pre>";


// 

print '<hr>'; 

print '<h2>Array Search</h2>';

print "<pre>";
var_dump (array_search('abacate', $array));
print "</pre>";

print "<pre>";
var_dump (array_search('@29iure', $arrayAssociativo));
print "</pre>";


// 

print '<hr>'; 

print '<h2>Isset</h2>';

print "<pre>";
var_dump (isset($array[0]));
print "</pre>";

print "<pre>";
var_dump (isset($arrayAssociativo['instagram']));
print "</pre>";


//

print '<hr>'; 

print '<h2>Array Key First</h2>';

print "<pre>";
print array_key_first($arrayAssociativo);
print "</pre>";

//

print '<hr>'; 

print '<h2>Array Key First</h2>';

print "<pre>";
print array_key_last($arrayAssociativo);
print "</pre>";

//

print '<hr>'; 

print '<h2>Array Flip</h2>';

print "<pre>";
print_r (array_flip($array));
print "</pre>";


//

print '<hr>'; 

print '<h2>Implode</h2>';

print "<pre>";
print implode(', ',$array); 
print "</pre>";


//

print '<hr>'; 

print '<h2>Explode</h2>';

print "<pre>";
print_r (explode('a','banana')); 
print "</pre>";
