<?php

class Cpf
{
    private $cpf;

    public function __construct()
    {
        $this->validaCpfTitular($cpf);
        $this->cpf = $cpf;
    }

    public function recuperaNumero()
    {
        return $this->cpf;
    }

    private function validaCpfTitular(string $cpfTitular)
    {
        if(strlen($cpfTitular) < 11){
            echo "Nome precisa ter pelo menos 11 caracteres";
            exit();
        }
    }

}