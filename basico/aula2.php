<?php

class Login{
    // Atributos private não podem ser acessados de fora da classe
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        return $this->email($e);
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        return $this->senha($s);
    }


    public function Logar(){
        if ($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Login efetuado com sucesso.";
        else:
            echo "Dados informados errados";
        endif;
    }
}

$login1 = new Login();
$login1->email = "teste@teste.com";
$login1->senha = "123456";
$login1->Logar();