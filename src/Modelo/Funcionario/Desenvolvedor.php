<?php

namespace Projeto01\Banco\Modelo\Funcionario;

use Projeto01\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario{
    
    public function sobeDeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }
}