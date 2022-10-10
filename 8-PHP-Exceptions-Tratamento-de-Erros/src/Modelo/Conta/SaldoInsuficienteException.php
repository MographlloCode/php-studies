<?php

namespace Alura\Banco\Modelo\Conta;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $msg = "Você tentou sacar R$$valorSaque, mas só tem R$$saldoAtual.";
        parent::__construct($msg);
    }
}