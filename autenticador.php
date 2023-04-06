<?php

use Projeto01\Banco\Modelo\CPF;
use Projeto01\Banco\Modelo\Funcionario\Diretor;
use Projeto01\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador;
$cpf = new CPF('123.456.789-78');
$diretor = new Diretor('Diretor', $cpf, 10000);
$autenticador->tentaLogin($diretor, '1234');