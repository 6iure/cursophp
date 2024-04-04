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

print '<h1>Manipulação de dados</h1>';

print '<h2>Array unique</h2>';

$array = [
    10,
    11,
    11,
    12,
    15,
    15,
];

print "<pre>";
print_r(array_unique($array));
print "</pre>"; 

//

print '<hr>';

print '<h2>Array Filter</h2>';

$array = [
  'nome' => 'Iure',
  'instagram' => '@29iure',
  'canal' => false 
];

print "<pre>";
print_r(array_filter ($array));
print "</pre>"; 

$filter = array_filter($array, function($value){
    return !is_null($value);
});

print "<pre>";
print_r($filter);
print "</pre>";  



print '<hr>';

print '<h2>Array Diff </h2>';

$arrayA = [
    10, 15, 25
];

$arrayB = [
    10, 17, 22, 26
];

print "<pre>";
print_r(array_diff($arrayA, $arrayB));
print "</pre>"; 

print "<pre>";
print_r(array_diff($arrayB, $arrayA));
print "</pre>"; 


//

print '<hr>';

print '<h2>Array Intersect</h2>';

print "<pre>";
print_r(array_intersect($arrayB, $arrayA));
print "</pre>"; 


//

print '<hr>';

print '<h2>Array Column</h2>';

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

print "<pre>";
print_r(array_column($array, 'nome'));
print "</pre>"; 