<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'Gustavo Mello',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($umDiretor,'1234');