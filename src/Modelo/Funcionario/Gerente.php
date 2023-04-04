<?php

namespace Projeto01\Banco\Modelo\Funcionario;

use Projeto01\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }
}
