<?php 

namespace Projeto01\Banco\Service;

use Projeto01\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;
    
    public function adicionaBonificacaoDe(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}
