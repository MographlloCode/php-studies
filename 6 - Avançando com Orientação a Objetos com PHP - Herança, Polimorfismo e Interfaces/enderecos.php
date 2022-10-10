<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco = new Endereco('Santos', 'Pantanal - Saboó', 'Rua 2', 22);

echo $endereco . PHP_EOL;

echo $endereco->cidade;