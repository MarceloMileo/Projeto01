<?php

namespace Projeto01\Banco\Modelo\Funcionario;

use Projeto01\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }


    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valor): void
    {
        if($valor < 0){
            echo 'Valor tem que ser positivo';
            return;
        }

        $this->salario += $this->salario + $valor;
    }
    
    abstract public function calculaBonificacao(): float;
}
