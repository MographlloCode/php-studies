<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente};
use Alura\Banco\Modelo\CPF;
use \Alura\Banco\Modelo\Endereco;

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Gustavo Mello',
        new Endereco('Santos', 'Saboo', 'RFL', '234')
    )
);

try{
    $contaCorrente->deposita(-100);
}
catch (InvalidArgumentException $exception) {
    echo "valor a depositar precisa ser positivo.";
}
