<?php

require 'veiculos.php';

class Carro extends Veiculos
{
    public function abrirPortas()
    {
        echo "As portas abriram.";
    }

    public function fecharPortas()
    {
        echo "As portas fecharam";
    }
}