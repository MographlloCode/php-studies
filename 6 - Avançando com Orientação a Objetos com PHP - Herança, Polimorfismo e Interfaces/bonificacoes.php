<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor};

$umFuncionario = new Gerente(
    'Gustavo Mello',
    new CPF('447.066.432-80'),
    1000.00
);

$umaFuncionaria = new Diretor(
    'Lanna Vieira',
    new CPF('442.066.432-80'),
    3000.00
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificaoDe($umFuncionario);
$controlador->adicionaBonificaoDe($umaFuncionaria);

echo $controlador->recuperatotal();