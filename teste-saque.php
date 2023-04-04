<?php

use Projeto01\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Projeto01\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$cpf = new Cpf('196.942.318-84');
$endereco = new Endereco('São Paulo', 'Santa Cecilia', 'Rua Tupi', '65');
$titular = new Titular($cpf, 'Marcelo', $endereco);
$conta = new ContaCorrente($titular);

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo() . PHP_EOL;