<?php 

class Login{
    public $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome; 
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email; 
    }

    public function setEmail($e){

        if (strpos($e, '@') === false) {
            throw new \Exception('E-mail inválido!');
        }

        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    } 

    public function getSenha(){
        return $this->senha; 
    }

    public function setSenha ($s){
        $this->senha = $s;
    } 

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif;
    }
} 

$aaa->nickname = '1234';
$aaa->setNickname('1234');

$aaa = new Login("teste@teste.com", "123456", "Iure Santiago");

//$aaa->setEmail('123');
$aaa->email = 123;

//$aaa->Logar();
//echo "<br>";
//echo $logar->getNome();