<?php 
    $nome = 'Fulano';
    $salarioBase = 1000;
    $horasExtra = 10;
    $valorDaHora = 20;

    $salarioFinal= $salarioBase + ($horasExtra * $valorDaHora);

    echo $salarioFinal;


    if($extra){
        $salarioBase *= 0.1 + $salarioBase; 
    }
    else {
        $salarioBase = $salarioBase;
    }

    
    

?>