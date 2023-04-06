<?php

namespace Projeto01\Banco\Modelo\Funcionario;

use Projeto01\Banco\Modelo\Autenticavel;
use Projeto01\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}
