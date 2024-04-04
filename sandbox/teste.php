<?php

class Computador {

    private $processador;
    private $placaMae;
    private $gpu;

    public function __construct($processador, $placaMae) {
        $this->procecessador = $processador;
        $this->placaMae = $placaMae;
    }

    public function setProcessador($processador) {
        $this->processador = $processador;
    }

    public function getProcessador() {
        return $this->processador;
    }
}


$pc = new Computador('I5', 'B550m');

$pc->setProcessador('I7');

echo 'O processador do meu PC é um: '.$pc->getProcessador();

echo print_r($pc);