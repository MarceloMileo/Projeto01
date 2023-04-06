<?php
require_once 'autoload.php';

use Projeto01\Banco\Modelo\Endereco;

$endereco = new Endereco('São Paulo', 'Santa Cecilia', 'Rua Tupi', '65');

echo $endereco . PHP_EOL;

exit();