<?php 
class Funcionario {
    
    private $nome;
    private $salarioBase;
    private $horasExtra;
    private $valorDaHora;
    private $i;

    public function setNome($n) {
        $this->nome = $n; 
    }
    public function setSalarioBase($base) {
        $this->salarioBase = $base;
    }
    public function setHorasExtra($extra) {
        $this->horasExtra = $n;
    }
    public function setValorDaHora($valor) {
        $this->valorDaHora = $valor;
    }
    public function getSalarioEfetivo() {
       return $this->salarioBase + ($this->HorasExtra * $this->valorDaHora );
    }
 
    public function adicionar(){

        $sql = "....;"; 
    }

    public function pix($i) {

    }

}

?>