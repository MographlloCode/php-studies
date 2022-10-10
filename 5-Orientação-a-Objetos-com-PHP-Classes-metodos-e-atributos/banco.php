<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$primeiraConta = new Conta(new Titular(new Cpf('123.456.789-10'), 'Gustavo Mello'));
$primeiraConta->depositar(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();