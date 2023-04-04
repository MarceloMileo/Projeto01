<?php

require_once 'autoload.php';


use Projeto01\Banco\Modelo\CPF;
use Projeto01\Banco\Modelo\Funcionario\Desenvolvedor;
use Projeto01\Banco\Modelo\Funcionario\Diretor;
use Projeto01\Banco\Modelo\Funcionario\Gerente;
use Projeto01\Banco\Service\ControladorDeBonificacoes;

$funcionario = new Diretor('Marcelo', new CPF('196.942.318-84'), 'Desenvolvedor', 6431.13);

$funcionario1 = new Gerente('Zé Aruela', new CPF('123.456.789-10'), 'Gilmar', 1000.00);

$funcionario2 = new Desenvolvedor('Ana Paula', new CPF('123.456.987-09'), 'Dsenvolvedor', 3000.00);

$controladorBonificacoes = new ControladorDeBonificacoes();
$controladorBonificacoes->adicionaBonificacaoDe($funcionario);
$controladorBonificacoes->adicionaBonificacaoDe($funcionario1);
$controladorBonificacoes->adicionaBonificacaoDe($funcionario2);

echo $controladorBonificacoes->recuperaTotal();