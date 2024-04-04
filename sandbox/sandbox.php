
<?php

    
    class Humano {

        private string $nome;
        private string $sobrenome;
        private int $idade;
        private float $salario;
        private array $animaisFavoritos;

        public function __construct(string $nome, string $sobrenome, int $idade, float $salario, array $animaisFavoritos) {
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->idade = $idade;
            $this->salario = $salario;
            $this->animaisFavoritos = $animaisFavoritos;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nomePar) {
            $this->nome = $nomePar;
        }

        public function getSalarioAnual() {
            return $this->salario * 12;
        }

        public function primeiroAnimalFavorito() {
            return $this->animaisFavoritos[0];
        }
    }

    $iure = new Humano(
        'Victor',
        'Noleto',
        27,
        1234.56,
        ['Gato', 'Leão', 'Jacaré']
    );

    echo $iure->getSalarioAnual();
    echo $iure->primeiroAnimalFavorito();

?>
