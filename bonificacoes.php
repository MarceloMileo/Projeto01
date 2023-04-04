<?php

require_once 'autoload.php';

use Projeto01\Banco\Modelo\{Funcionario, CPF};
use Projeto01\Banco\Service\ControladorDeBonificacoes;

$funcionario = new Funcionario('Marcelo', new CPF('196.942.318-84'), 'Desenvolvedor', 6431.13);

$funcionario1 = new Funcionario('Zé Aruela', new CPF('123.456.789-10'), 'Gilmar', 1000.00);

$controladorBonificacoes = new ControladorDeBonificacoes();
$controladorBonificacoes->adicionaBonificacaoDe($funcionario);
$controladorBonificacoes->adicionaBonificacaoDe($funcionario1);

echo $controladorBonificacoes->recuperaTotal();