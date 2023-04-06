<?php

namespace Projeto01\Banco\Modelo\Conta;

use Projeto01\Banco\Modelo\Autenticavel;
use Projeto01\Banco\Modelo\Pessoa;
use Projeto01\Banco\Modelo\CPF;
use Projeto01\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}
