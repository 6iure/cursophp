<?php

/**
 * Toda classe tem [atributos] e [método]
 * Esses atributos/métodos podem ser [privados] ou [públicos]
 * 
 * */

class Animal {
   
    private string $reino;
    private string $filo;
    private string $classe;
    private string $ordem;
    private string $familia;
    private string $genero;
    private string $especie;

    public function __construct(
        $reino,
        $filo,
        $classe,
        $ordem,
        $familia,
        $genero,
        $especie
    ) {
        $this->reino = $reino;
        $this->filo = $filo;
        $this->classe = $classe;
        $this->ordem = $ordem;
        $this->familia = $familia;
        $this->genero = $genero;
        $this->especie = $especie;
    }

    public function setReino(string $reino) {

        if ($reino == 'reino a') {
            throw new \Exception('Reino inválido!');
        }

        $this->reino = $reino;
    }
}