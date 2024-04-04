<?php 
require 'funcionario_class.php';

$funcionario = new Funcionario();
$funcionario -> setNome('Fulano');
$funcionario -> setSalarioBase('1000');
$funcionario -> setHorasExtra('10');
$funcionario -> setValorDaHora('20');


echo $funcionario -> getSalarioEfetivo();

   if($extra){
     $salarioBase = $salarioBase * 0.1; 
   }


   
?>
