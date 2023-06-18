<?php

use Projeto01\Banco\Modelo\CPF;
use Projeto01\Banco\Modelo\Funcionario\Diretor;
use Projeto01\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new \Projeto01\Banco\Modelo\Funcionario\Gerente(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor, '4321');
