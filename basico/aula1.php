<?php

// metodos ou funcões são o que, por exemplo, uma pessoa pode fazer, ex.: falar, sorrir, andar

// Cria uma classe, por bons metodos na programação a classe começa com a letra maiúscula.
class Pessoa {
    // public: cria um atributo
    public $nome;
    public $idade;

    //public: cria um método usando uma função
    public function Falar(){
        //para usar uma variavel de um escorpo de classe PRECISA do $this->[nome da variavel]
        echo $this->nome . " que tem " . $this->idade . " anos de idade falou." . PHP_EOL;
    } 

    public function Sentar(){
        echo $this->nome . " que tem " . $this->idade . " deu aquela sentada nervosa." . PHP_EOL;
    }
}

// para instanciar (criar um novo objeto dentro da classe) uma pessoa \/

$jorge = new Pessoa();
$jorge->nome = 'Jorge';
$jorge->idade = '26';

$carlos = new Pessoa();
$carlos->nome = "Carlos";
$carlos->idade = 26;

//executa um metodo de uma classe através do objeto
$jorge->Falar();
$carlos->Falar();
$carlos->Sentar();