<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{

    private $totalBonificacoes = 0;

    public function adicionaBonificaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperatotal(): float
    {
        return $this->totalBonificacoes;
    }
}