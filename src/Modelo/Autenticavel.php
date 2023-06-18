<?php

namespace Projeto01\Banco\Modelo;

interface Autenticavel
{
    public function podeAutenticar(string $senha): bool;
}
