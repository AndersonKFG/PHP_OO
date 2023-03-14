<?php

require 'protected.php';

class Filha extends Pessoa
{
    // name = Pedrinho
}

$m = new Filha;


// Por que ao executar esse comando retornou JorgePedrinho?
echo $m->getName();