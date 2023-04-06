<?php

namespace Projeto01\Banco\Service;

use Projeto01\Banco\Modelo\Autenticavel;

class Autenticador
{

    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "OK, autenticado";
        }else{

            echo "Senha incorreta";
        }

    }

}
