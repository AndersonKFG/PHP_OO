<?php

// O encapsulamento protected não deixa o atributo ser acessado de fora da classe.

// Para alterar um atributo protected é necessário alterá-lo através de uma função public.

class Pessoa
{
    protected $name = "Pedrinho";

    public function getName()
    {   
        return $this->name;
    }

    public function setName($nome)
    {   
        $this->name = $nome;
    }
}

$p = new Pessoa;
echo $p->setName('Jorge');
echo $p->getName();