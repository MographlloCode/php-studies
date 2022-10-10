<?php

// ao criar uma classe é criado um novo tipo
class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        if($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this -> saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0) {
            echo "Valor deve ser positivo";
            return;
        }

        $this -> saldo += $valorADepositar;
    }

    public function transferir($valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}