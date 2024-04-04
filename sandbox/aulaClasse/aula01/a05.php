<?php 
class Veiculo {
    private $modelo;
    public $cor; 
    public $ano;

    public function Andar(){
        echo "Andou";
    }
    
    public function Parar() {
        echo "Parou";
    }

    
}


class Carro extends Veiculo {

    public function ligarLimpador() {
        echo "Limpando em 321";
    }

    public function setModelo($m){
        $this->modelo = $m; 
    }

    public function getModelo() {
        return $this->modelo;
    } 
}

class Moto extends Veiculo {
    public function darGrau(){
        echo "Dando grau em 321";
    }
}

$carro = new Carro();
$carro->setModelo("HILUX");
echo $carro->getModelo();
var_dump($carro);
